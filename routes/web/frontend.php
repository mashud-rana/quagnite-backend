<?php

use App\Http\Controllers\Admin\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WikiController;
use App\Http\Controllers\Frontend\EbookController;
use App\Http\Controllers\Frontend\ForumController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\CoachesController;
use App\Http\Controllers\Frontend\BootcampController;
use App\Http\Controllers\Frontend\BusinessController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\Exam\ExamController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Event\EventController;
use App\Http\Controllers\Frontend\ConsultationController;
use App\Http\Controllers\Frontend\Subscription\SubscribeController;
use App\Http\Controllers\Teacher\Course\CourseController as CourseCourseController;

// Forum
Route::group(['prefix' => 'forum', 'as' => 'forum.'], function () {
    Route::get('/', [ForumController::class, 'index'])->name('index');
    Route::get('ask-a-question', [ForumController::class, 'askQuestion'])->name('askQuestion');
    Route::post('ask-a-question-store', [ForumController::class, 'questionStore'])->name('question.store');
    Route::get('forum-post-details/{uuid}', [ForumController::class, 'forumPostDetails'])->name('forumPostDetails');
    Route::post('forum-post-comment-store', [ForumController::class, 'forumPostCommentStore'])->name('forumPostComment.store');
    Route::post('forum-post-comment-reply-store', [ForumController::class, 'forumPostCommentReplyStore'])->name('forumPostCommentReply.store');
    Route::get('sort-by-old-new/{type}', [ForumController::class, 'sortByOldNew']);
    Route::get('sort-by-category/{id}', [ForumController::class, 'sortByCategory']);
    Route::get('search/{query}', [ForumController::class, 'searchForum']);
    Route::post('place-vote', [ForumController::class, 'placeVote'])->name('vote.place');
});

// Coaches
Route::get('coaches', [CoachesController::class, 'index'])->name('front.coaches');
Route::get('/all-coaches', [CoachesController::class, 'coachList'])->name('front.allCoaches');
Route::get('coaches/profile/{uuid}', [ConsultationController::class, 'coachDetails'])->name('front.coachDetails');
Route::get('get-off-days/{user_id}', [ConsultationController::class, 'getOffDays'])->name('getOffDays');
Route::get('get-coach-booking-times', [ConsultationController::class, 'getCoachBookingTime'])->name('getCoachBookingTimeRoute');

//blog
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/details/{slug}', [BlogController::class, 'blogDetails'])->name('details');
    Route::post('/comment/store', [BlogController::class, 'storeComment'])->name('comment.store');
    Route::get('/search/{query}', [BlogController::class, 'searchBlog']);
    Route::get('/search-by-category/{id}', [BlogController::class, 'searchBlogByCategory']);
    Route::get('/search-by-tag/{id}', [BlogController::class, 'searchBlogByTag']);
});

// Wiki
Route::get('/all-wikis', [WikiController::class, 'index'])->name('all.wikis');
Route::get('/wiki-details/{slug}', [WikiController::class, 'wikiDetails'])->name('wiki.details');
Route::get('wiki/search/{query}', [WikiController::class, 'searchWiki']);
Route::get('wiki/sort-by-old-new/{type}', [WikiController::class, 'sortByOldNew']);
Route::get('wiki/sort-by-category/{id}', [WikiController::class, 'sortByCategory']);

// Ebooks
Route::get('/ebooks', [EbookController::class, 'index'])->name('ebooks');
Route::get('/ebooks/{slug}', [EbookController::class, 'show'])->name('ebooks.show');
Route::get('/reserve-ebook', [EbookController::class, 'reserveEbook'])->name('reserve.ebook');
Route::post('/reserve-ebook', [EbookController::class, 'reserveEbookStore'])->name('reserve.ebook.store');
Route::get('ebook/search/{query}', [EbookController::class, 'searchEbook']);
Route::get('ebook/sort-by-category/{id}', [EbookController::class, 'sortByCategory']);

// Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/all-courses', [CourseController::class, 'allCourses'])->name('all.courses');
Route::get('/course-details/{slug}', [CourseController::class, 'details'])->name('course.details');
Route::get('/frontend/preview-lecture/{id}', [CourseCourseController::class, 'previewLecture']);

// Bootcamps
Route::get('/bootcamps', [BootcampController::class, 'index'])->name('bootcamps');
Route::get('/all-bootcamps', [BootcampController::class, 'allBootcamps'])->name('all.bootcamps');
Route::get('/bootcamp-details/{slug}', [BootcampController::class, 'details'])->name('bootcamp.details');

//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/remove-cart-item/{rowId}', [CartController::class, 'removeCartItem'])->name('removeCartItem');
Route::get('/cancel-order', [CartController::class, 'cancelOrder'])->name('cancel.order');
Route::post('/apply-coupon', [CartController::class, 'applyCoupon'])->name('apply.coupon');
Route::post('/remove-coupon', [CartController::class, 'removeCoupon'])->name('remove.coupon');

//Subscribe
Route::post('add-to-subscribe', [SubscribeController::class, 'subscribe'])->name('addToSubscribe');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

//botman
// Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

//event
Route::group(['prefix' => 'event', 'as' => 'event.'], function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/details/{slug}', [EventController::class, 'eventDetails'])
        ->name('details');
    Route::post('/attendee/store', [EventController::class, 'storeAttendee'])
        ->name('attendee.store');
});

//exam
Route::group(['prefix' => 'exams', 'as' => 'exams.'], function () {
    Route::get('/', [ExamController::class, 'index'])->name('index');
});

// home page load section
Route::get('/load-section/{section}', [HomeController::class, 'loadSection'])
    ->name('frontend.loadSection');
// help page
Route::get('/help', [HomeController::class, 'HelpDesk'])
    ->name('frontend.help');
Route::get('/help/{slug}', [HomeController::class, 'helpDetails'])
    ->name('frontend.help.details');

//Business
Route::get('/business', [BusinessController::class, 'index'])
    ->name('business.index');

// pages
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])
    ->name('frontend.privacy-policy');
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])
    ->name('frontend.terms-condition');
Route::get('/contact-us', [HomeController::class, 'contact'])
    ->name('frontend.contact');
Route::post('/contact-us', [ContactUsController::class, 'store'])
    ->name('frontend.contactus.store');
