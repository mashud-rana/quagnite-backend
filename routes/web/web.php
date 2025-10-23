<?php

use App\Http\Controllers\Chat\MessagesController;
use App\Http\Controllers\Coach\Coaching\CoachingController;
use App\Http\Controllers\Coach\Coaching\CoachingConversationController;
use App\Http\Controllers\Common\ApiController;
use App\Http\Controllers\Common\Notification\NotificationController;
use App\Http\Controllers\Common\Profile\ProfileController;
use App\Http\Controllers\Common\Ticket\ReplyController;
use App\Http\Controllers\Common\Ticket\TicketController;
use App\Http\Controllers\Common\TrixEditorController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\Home\GlobalSearchController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Teacher\Wallet\BeneficiaryController;
use App\Http\Controllers\Teacher\Wallet\WalletController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;
use Stripe\Stripe;
use Stripe\StripeClient;

Route::prefix('itclanbd')->group(function () {
    // Front End Pages
    Route::get('/', [HomeController::class, 'index'])->name('front.home');
    Route::get('/all-courses', [FrontController::class, 'allCourses'])->name('all.courses');
    Route::get('/course-details/{slug}', [FrontController::class, 'courseDetails'])->name('course.details');
    Route::get('/all-pricings', [FrontController::class, 'allPricings'])->name('all.pricings');

    // Payment
    Route::post('/payments/pay', [PaymentController::class, 'pay'])->name('front.pay');
    Route::get('/payments/approval', [PaymentController::class, 'approval'])->name('front.pay.approval');
    Route::get('/payments/cancelled', [PaymentController::class, 'cancelled'])->name('front.pay.cancelled');

    //get extra data with axios
    Route::get('/get-enrolled-courses/{ticket_for}', [\App\Http\Controllers\Common\ExtraDataController::class, 'getEnrolledCourses']);
    Route::get('/get-enrolled-courses/{ticket_for}', [\App\Http\Controllers\Common\ExtraDataController::class, 'getEnrolledCourses']);

    Route::group(['middleware' => 'auth'], function () {
        // PROFILE
        Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile.info');
        Route::post('/avatar/update', [ProfileController::class, 'avatarUpdate'])->name('user.avatar.update');
        Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
        Route::post('/pass/update/', [ProfileController::class, 'updatePassword'])->name('user.update.password');

        // Wallet
        Route::get('/wallet', [WalletController::class, 'index'])->name('wallet');
        Route::get('/beneficiary', [BeneficiaryController::class, 'index'])->name('beneficiary');
        Route::post('/beneficiary/store', [BeneficiaryController::class, 'store'])->name('beneficiary.store');
        Route::get('/beneficiary/delete/{uuid}', [BeneficiaryController::class, 'delete'])->name('beneficiary.delete');
        Route::post('/withdraw-request/store', [WalletController::class, 'storeWithdrawRequest'])->name('withraw.request.store');

        // Api
        Route::get('/api/docs', [ApiController::class, 'docs'])->name('api.docs');
        Route::get('/api/dashboard', [ApiController::class, 'index'])->name('api.dashboard');
        Route::get('/api/credential', [ApiController::class, 'credential'])->name('api.credential');
        Route::post('/api/genereate-key', [ApiController::class, 'generateKey'])->name('api.generate.key');
        Route::post('/api/submit-review', [ApiController::class, 'reviewSubmit'])
            ->name('api.review.submit');
        Route::get('/api-plan/{api_plan_id}/review', [ApiController::class, 'getReview'])->name('api.plan.getReview');

        //Ticket
        Route::resource('/ticket', TicketController::class)->except('edit,update,destroy');
        Route::resource('/ticket-reply', ReplyController::class)->except('edit,update,destroy,show,create');
        // coaching conversation
        Route::get('my-coaching/{uuid}', [CoachingController::class, 'coachingActivities'])->name('coaching.activities');
        Route::post('/store-conversation', [CoachingConversationController::class, 'storeConversation'])->name('storeConversation');

        // chat
        Route::get('chat/', [MessagesController::class, 'index'])->name('chat');
        Route::get('chat/{uuid}', [MessagesController::class, 'index'])->name('chat.user');

        // notification
        Route::get('/all-notification', [NotificationController::class, 'allNotification'])->name('notification.index');
        Route::get('/markasread/{id}', [NotificationController::class, 'markAsRead'])->name('markasread');
        Route::get('/markasread-all/', [NotificationController::class, 'markAsReadAll'])->name('markasreadall');
        Route::get('/notifications/{notification}', [NotificationController::class, 'destroy'])->name('notifications.destroy');
    });

    // global search
    Route::get('/global-search', [GlobalSearchController::class, 'search'])->name('fullsearch');

    // Forum
    Route::get('/forum-details', function () {
        return view('frontend.forum.forum_details');
    })->name('forum.details');

    Route::get('/reset-password-email', function () {
        return view('email.auth.email_verification_register');
    });

    // Trix Editor
    Route::post('trix/store', [TrixEditorController::class, 'store'])->name('trix.store');
    Route::post('trix/delete', [TrixEditorController::class, 'delete'])->name('trix.delete');

    //logs
    Route::get('logs', [LogViewerController::class, 'index']);
    Route::get('/dispatch-job', function () {
        App\Jobs\TestQueueJob::dispatch();

        return 'Job dispatched!';
    });

    // book demo
    Route::post('book-your-demo', [HomeController::class, 'bookYourDemo'])->name('bookYourDemo');


Route::get('stripe-test', function () {
    $stripe = new StripeClient(config('settings.stripe_secret'));

    $paymentMethod = $stripe->paymentMethods->create([
        'type' => 'card',
        'card' => [
            'number' => '4242424242424242',
            'exp_month' => 12,
            'exp_year' => 2026,
            'cvc' => '123',
        ],
    ]);


    $paymentMethodId = $paymentMethod->id;
    Stripe::setApiKey(config('settings.stripe_secret'));
    $user= user::first();
    $stripe = new StripeClient(config('settings.stripe_secret'));
    $stripeCustomerId = null;
    // If user has no stripe_customer_id, create one

        $customer = $stripe->customers->create([
            'email' => $user->email,
        ]);

        $stripeCustomerId = $customer->id;

    // Attach card
    $stripe->paymentMethods->attach(
        $paymentMethodId, // from Stripe.js
        ['customer' => $stripeCustomerId]
    );

    // Set as default
    $stripe->customers->update($stripeCustomerId, [
        'invoice_settings' => [
            'default_payment_method' => $paymentMethodId,
        ],
    ]);

    dd($stripeCustomerId,$paymentMethodId);



});


Route::get('stripe-bye-product',function(){
    Stripe::setApiKey(config('settings.stripe_secret'));
    $stripe = new StripeClient(config('settings.stripe_secret'));



    $amount = 500; // $10 in cents

    $paymentIntent = $stripe->paymentIntents->create([
        'amount' => $amount,
        'currency' => 'usd',
        'customer' => 'cus_TEunntDBcEmAs1',
        'payment_method' => 'pm_1SIQxnRT3L59VBqrLrlArGH5',
        'off_session' => true,
        'confirm' => true,
//        'transfer_data' => [
////            'destination' => 'acct_1SIRbxREoR6lMDCt', // admin’s connected account
//            'destination' => 'acct_1SISPdInX4IXvJdY', // admin’s connected Stanred account
//        ],
    ]);

    return response()->json([
        'message' => 'Payment successful',
        'payment_id' => $paymentIntent->id
    ]);
});

Route::get('get-stripe-account',function(){
    Stripe::setApiKey(config('settings.stripe_secret'));
    $stripe = new StripeClient(config('settings.stripe_secret'));

    // Create an Express account for the admin
//    $account = $stripe->accounts->create([
//        'type' => 'standard', // or 'standard'
//        'country' => 'US', // change if needed
//        'email' => 'admin@app.com', // admin’s email
//        'capabilities' => [
//            'card_payments' => ['requested' => true],
//            'transfers' => ['requested' => true],
//        ],
//    ]);
//    dd($account);
    $accountLink = $stripe->accountLinks->create([
        'account' => 'acct_1SISPdInX4IXvJdY',
        'refresh_url' => url('/reauth'),
        'return_url' => url('/dashboard'),
        'type' => 'account_onboarding',
    ]);

    dd($accountLink);

//    Check status
    $account = $stripe->accounts->retrieve('acct_1SIRbxREoR6lMDCt');
    dd($account->capabilities);

    return response()->json([
        'message' => 'Connected account created',
        'stripe_account_id' => 'acct_1SIRbxREoR6lMDCt'
    ]);
});




});
