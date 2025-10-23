<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\Exam\ExamController;
use App\Http\Controllers\Student\Course\NoteController;
use App\Http\Controllers\Student\Ebook\EbookController;
use App\Http\Controllers\Student\Course\CourseController;
use App\Http\Controllers\Student\Resume\ResumeController;
use App\Http\Controllers\Student\Ticket\TicketController;
use App\Http\Controllers\Student\Invoice\RefundController;
use App\Http\Controllers\Student\Invoice\InvoiceController;
use App\Http\Controllers\Student\Profile\ProfileController;
use App\Http\Controllers\Student\Chat\StudentChatController;
use App\Http\Controllers\Student\Bootcamp\BootcampController;
use App\Http\Controllers\Student\Coaching\CoachingController;
use App\Http\Controllers\Student\Purchase\PurchaseController;
use App\Http\Controllers\Student\Dashboard\DashboardController;
use App\Http\Controllers\Student\Playground\PlaygroundController;
use App\Http\Controllers\Student\Certificate\CertificateController;
use App\Http\Controllers\Student\Subscription\SubscriptionController;
use App\Http\Controllers\Student\Subscription\SubscriptionPaymentController;
use App\Http\Controllers\Coach\Coaching\CoachingController as CoachingCoachingController;

Route::prefix('itclanbd/student')->as('student.')->middleware(['auth', 'is_student', 'prevent_back_history'])->group(function () {

    // profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/pass/update/', [ProfileController::class, 'updatePassword'])->name('update.password');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Subscription upgrade
    Route::prefix('subscription')->as('subscription.')->group(function () {
        Route::get('/', [SubscriptionController::class, 'index'])->name('index');
        Route::get('/upgrade-list', [SubscriptionController::class, 'upgradeList'])->name('upgrade.list');
        Route::get('/checkout', [SubscriptionController::class, 'checkout'])->name('checkout');
        Route::post('/checkout', [SubscriptionController::class, 'cartStore'])->name('upgrade.cart.store');

        //payment
        Route::post('/pay', [SubscriptionPaymentController::class, 'pay'])->name('pay');
        Route::get('/pay/approval', [SubscriptionPaymentController::class, 'approval'])->name('pay.approval');
        Route::get('/pay/cancelled', [SubscriptionPaymentController::class, 'cancelled'])->name('pay.cancelled');

        // Coupon
        Route::post('/coupon/validate', [SubscriptionCheckoutController::class, 'validateCoupon'])
            ->name('coupon.validate');
    });

    //course
    Route::get('/my-courses', [CourseController::class, 'index'])->name('courses');
    Route::get('/course/{slug}/{lessonUuid?}/{lectureUuid?}', [CourseController::class, 'show'])->name('show-course');

    // Course Review
    Route::post('course/submit-review', [CourseController::class, 'reviewSubmit'])->name('course.review.submit');
    Route::post('coach/submit-review', [CoachingCoachingController::class, 'reviewSubmit'])->name('coach.review.submit');

    // Course Discussion
    Route::post('course/submit-discussion', [CourseController::class, 'discussionSubmit'])->name('course.discussion.submit');
    Route::post('course/submit-discussion-comment', [CourseController::class, 'discussionCommentSubmit'])->name('course.discussion.comment.submit');

    //Bootcamp
    Route::get('/my-bootcamps', [BootcampController::class, 'index'])->name('bootcamps');
    Route::get('/bootcamp/{slug}/{uuid?}', [BootcampController::class, 'show'])->name('show-bootcamp');
    Route::get('/join/class/{uuid}', [BootcampController::class, 'joinClass'])->name('bootcamp.join');

    // Bootcamp Review
    Route::post('bootcamp/submit-review', [BootcampController::class, 'reviewSubmit'])->name('bootcamp.review.submit');

    // Bootcamp Discussion
    Route::post('bootcamp/submit-discussion', [BootcampController::class, 'discussionSubmit'])->name('bootcamp.discussion.submit');
    Route::post('bootcamp/submit-discussion-comment', [BootcampController::class, 'discussionCommentSubmit'])->name('bootcamp.discussion.comment.submit');

    // Ebooks
    Route::get('my-ebooks', [EbookController::class, 'index'])->name('ebooks');
    Route::get('my-ebooks/download/{uuid}', [EbookController::class, 'download'])->name('ebooks.download')->withoutMiddleware('prevent_back_history');

    // Exams
    Route::get('my-exams', [ExamController::class, 'index'])->name('exams');
    Route::get('exam/instruction/{examid}/{enrollid}', [ExamController::class, 'examInstruction'])->name('exam.instruction');
    Route::get('exam/start/{examid}/{enrollid}', [ExamController::class, 'examStart'])->name('exam.start');
    Route::post('exam/submit', [ExamController::class, 'examSubmit'])->name('exam.submit');
    Route::post('exam/results', [ExamController::class, 'getExamResults'])->name('exam.results');

    // Coaching
    Route::get('my-coachings', [CoachingController::class, 'index'])->name('coachings');
    Route::get('my-coachings/join/{uuid}', [CoachingController::class, 'joinCoaching'])->name('coachings.join');

    // playground
    Route::get('my-playground', [PlaygroundController::class, 'index'])->name('playground');

    Route::get('/course/exam/details/{id}', [CourseController::class, 'examDetailsWithAnswers']);
    //Ticket
    Route::resource('/ticket', TicketController::class)->except('edit,update');
    //Exam
    Route::get('/exam/{id}', [ExamController::class, 'exam'])->name('take.exam');
    Route::post('/exam/store', [ExamController::class, 'store'])->name('store.exam');

    // Resume
    Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
    Route::post('/resume-upload', [ResumeController::class, 'uploadResume'])->name('resume.upload');
    Route::get('my-resume/download/{uuid}', [ResumeController::class, 'download'])->name('resume.download')->withoutMiddleware('prevent_back_history');
    Route::delete('/resume/{id}', [ResumeController::class, 'deleteResume'])->name('resume.delete');

    Route::get('/exam/{id}', [ExamController::class, 'exam'])->name('take.exam');
    Route::post('/exam/store', [ExamController::class, 'store'])->name('store.exam');

    // chat
    Route::get('chat', [StudentChatController::class, 'index'])->name('chat.index');
    Route::get('/my-classmates', [StudentChatController::class, 'myClassmates'])->name('classmates');

    //certificate
    Route::get('certificate', [CertificateController::class, 'index'])->name('certificate.index');
    Route::get('certificate/{courseId}', [CertificateController::class, 'generateCertificate'])->name('certificate.generate');
    Route::get('certificate/view/{courseId}', [CertificateController::class, 'viewCertificate'])->name('certificate.view');

    //purchase
    Route::get('purchase', [PurchaseController::class, 'index'])->name('purchase.index');
    // invoice
    Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('invoice/{id}', [InvoiceController::class, 'generateInvoice'])->name('invoice.generate');
    Route::get('invoice/view/{id}', [InvoiceController::class, 'viewInvoice'])->name('invoice.view');

    //note
    Route::post('/post-note/', [NoteController::class, 'store'])->name('note.post-note');
    Route::delete('/delete-note/{note_id}', [NoteController::class, 'destroy'])->name('note.delete-note');
    Route::get('/note/get-all-notes/{user_id}/{course_id}', [NoteController::class, 'getAllNotes'])
        ->name('note.get-all-notes');
    Route::get('/note/update-status', [NoteController::class, 'updateStatus'])->name('note.update-status');

    // Route::get('video', [DashboardController::class, 'video']);
    // announcements
    Route::get('/announcements', [DashboardController::class, 'getAnnouncements'])->name('announcements');
    // Refund
    Route::post('/refund-request', [RefundController::class, 'submitRefundRequest'])->name('refund.request');

});
