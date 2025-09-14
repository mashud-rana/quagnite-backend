<?php

use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Bootcamp\BootcampController;
use App\Http\Controllers\Admin\BulkActionController;
use App\Http\Controllers\Admin\Business\ApiPlanController;
use App\Http\Controllers\Admin\Certificate\CertificateController;
use App\Http\Controllers\Admin\CMS\PageController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\Course\CourseLanguageController;
use App\Http\Controllers\Admin\Course\DifficultyLevelController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\DemoBookController;
use App\Http\Controllers\Admin\Ebook\EbookController;
use App\Http\Controllers\Admin\Event\AttendeeController;
use App\Http\Controllers\Admin\Event\EventController as EventEventController;
use App\Http\Controllers\Admin\Event\SpeakerController;
use App\Http\Controllers\Admin\Exam\EnrollExamController;
use App\Http\Controllers\Admin\Exam\ExamController;
use App\Http\Controllers\Admin\Exam\ExamResultController;
use App\Http\Controllers\Admin\Exam\QuestionController;
use App\Http\Controllers\Admin\Faq\FaqController;
use App\Http\Controllers\Admin\Faq\FaqTopicController;
use App\Http\Controllers\Admin\Forum\ForumController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\Member\MembersController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\Playground\PlaygroundCategoryController;
use App\Http\Controllers\Admin\Playground\PlaygroundConfigurationController;
use App\Http\Controllers\Admin\Playground\PlaygroundController;
use App\Http\Controllers\Admin\PreRequisition\BlogCategoryController;
use App\Http\Controllers\Admin\PreRequisition\BootcampCategoryController;
use App\Http\Controllers\Admin\PreRequisition\CoachCategoryController;
use App\Http\Controllers\Admin\PreRequisition\CourseCategoryController;
use App\Http\Controllers\Admin\PreRequisition\EbookCategoryController;
use App\Http\Controllers\Admin\PreRequisition\ForumCategoryController;
use App\Http\Controllers\Admin\PreRequisition\Grade\GradeController;
use App\Http\Controllers\Admin\PreRequisition\TagCategoryController;
use App\Http\Controllers\Admin\PreRequisition\TagController;
use App\Http\Controllers\Admin\PreRequisition\TeacherCategoryController;
use App\Http\Controllers\Admin\PreRequisition\Wiki\WikiCategoryController;
use App\Http\Controllers\Admin\PreRequisition\Wiki\WikiTagController;
use App\Http\Controllers\Admin\Profile\AdminProfileController;
use App\Http\Controllers\Admin\Refund\RefundRequestController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Settings\AwsAccountController;
use App\Http\Controllers\Admin\Settings\GcpProjectController;
use App\Http\Controllers\Admin\Settings\PlaygroundQuestionController;
use App\Http\Controllers\Admin\Settings\PlaygroundSettingController;
use App\Http\Controllers\Admin\Settings\PolicySettingController;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\Admin\SpoofLoginController;
use App\Http\Controllers\Admin\Subscription\SubscriptionController;
use App\Http\Controllers\Admin\Ticket\TicketController;
use App\Http\Controllers\Admin\User\CoachController;
use App\Http\Controllers\Admin\User\StudentController;
use App\Http\Controllers\Admin\User\TeacherController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Admin\Wiki\WikiController;
use App\Http\Controllers\Admin\Withdraw\WithdrawRequestController;
use App\Http\Controllers\Common\Notification\NotificationController;
use App\Http\Controllers\Teacher\Course\QuizController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->middleware(['auth', 'is_admin', 'prevent_back_history'])->group(function () {
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin-preview', [DashboardController::class, 'adminPreview'])->name('admin-preview');
    // ROLE
    Route::resource('roles', RoleController::class)->except('show');
    // USER
    Route::resource('users', UsersController::class);
    // MEMBERS
    Route::resource('members', MembersController::class);

    // PROFILE
    Route::get('/profile', [AdminProfileController::class, 'index'])->name('profile.info');
    Route::put('/profile/update/{id}', [AdminProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/pass/update/', [AdminProfileController::class, 'updatePassword'])->name('update.password');

    // Teacher
    Route::resource('teachers', TeacherController::class)->except('show');
    // Pending Teachers
    Route::get('teachers/pending-list', [TeacherController::class, 'pendingList'])->name('teachers.pending.list');
    Route::post('teachers/approve/{id}', [TeacherController::class, 'approveTeacher'])->name('teacher.approve');
    // Approved Teachers
    Route::get('teachers/approve-list', [TeacherController::class, 'approveList'])->name('teachers.approve.list');
    Route::post('teachers/block/{id}', [TeacherController::class, 'blockTeacher'])->name('teacher.block');
    // Blocked Teachers
    Route::get('teachers/block-list', [TeacherController::class, 'blockedList'])->name('teachers.block.list');

    // Coaches
    Route::resource('coaches', CoachController::class)->except('show');
    // Pending Coaches
    Route::get('coaches/pending-list', [CoachController::class, 'pendingList'])->name('coaches.pending.list');
    Route::post('coaches/approve/{id}', [CoachController::class, 'approveCoach'])->name('coach.approve');
    // Approved Coaches
    Route::get('coaches/approve-list', [CoachController::class, 'approveList'])->name('coaches.approve.list');
    Route::post('coaches/block/{id}', [CoachController::class, 'blockCoach'])->name('coach.block');
    // Blocked Coaches
    Route::get('coaches/block-list', [CoachController::class, 'blockedList'])->name('coaches.block.list');

    // Students
    Route::resource('students', StudentController::class)->except('show');
    Route::group(['prefix' => 'students', 'as' => 'students.'], function () {

        Route::get('enrolled/course', [StudentController::class, 'enrolledCourseStudents'])->name('enrolled.course');
        Route::get('enrolled/bootcamp', [StudentController::class, 'enrolledBootcampStudents'])->name('enrolled.bootcamp');
    });

    // Course Category
    Route::resource('course-categories', CourseCategoryController::class)->except('show');
    Route::resource('course-languages', CourseLanguageController::class)->except('show');
    Route::resource('course-difficulty-levels', DifficultyLevelController::class)->except('show');
    // Bootcamp Category
    Route::resource('bootcamp-categories', BootcampCategoryController::class)->except('show');
    // Coach Category
    Route::resource('coach-categories', CoachCategoryController::class)->except('show');
    // Teacher Category
    Route::resource('teacher-categories', TeacherCategoryController::class)->except('show');
    // Forum Category
    Route::resource('forum-categories', ForumCategoryController::class)->except('show');
    // Blog Category
    Route::resource('blog-categories', BlogCategoryController::class)->except('show');
    // Ebook Category
    Route::resource('ebook-categories', EbookCategoryController::class)->except('show');
    // Subscription
    Route::resource('subscriptions', SubscriptionController::class)->except('show');

    // Business
    Route::group(['prefix' => 'business', 'as' => 'business.'], function () {
        Route::resource('api-plans', ApiPlanController::class)->except('show');
    });
    // TAG
    Route::resource('tags', TagController::class)->except('show');
    // TAG CATEGORY
    Route::resource('tag-categories', TagCategoryController::class);
    // // CAREER SECTION
    // Route::resource('career-sections', CareerSectionsController::class);
    // // CAREER AREA
    // Route::resource('career-areas', CareerAreasController::class);

    // COURSE
    // Route::resource('course', CourseController::class);

    // COURSE MODULES
    // Route::resource('course-modules', CourseModuleController::class)->only(['update', 'destroy']);

    // Wiki Category
    Route::resource('wiki-category', WikiCategoryController::class)->except('show');

    // Wiki Tag
    Route::resource('wiki-tag', WikiTagController::class)->except('show');

    // Manage Courses
    Route::group(['prefix' => 'course', 'as' => 'course.'], function () {
        Route::get('/all-courses', [CourseController::class, 'allCourses'])->name('all');
        Route::get('/hold-courses', [CourseController::class, 'HoldCourses'])->name('hold');
        Route::get('/approve-courses', [CourseController::class, 'ApproveCourses'])->name('approve');
        Route::get('/pending-courses', [CourseController::class, 'PendingCourses'])->name('pending');
        Route::get('/status-change/{id}/{status}', [CourseController::class, 'statusChange'])->name('status.change');
        Route::delete('/delete/{id}', [CourseController::class, 'delete'])->name('delete');
        Route::get('/preview-course/{uuid}', [CourseController::class, 'edit'])->name('preview.course');
        Route::get('edit-content/{uuid}', [CourseController::class, 'editContent'])->name('edit.content');
        Route::post('update', [CourseController::class, 'update'])->name('update');
        Route::get('submit/{uuid}', [CourseController::class, 'submit'])->name('submit');
        Route::get('show/{slug}/{lessonUuid?}/{lectureUuid?}', [CourseController::class, 'show'])->name('show');
        // Lesson
        Route::post('store-lesson', [CourseController::class, 'storeLesson'])->name('storeLesson');
        Route::post('delete-lesson', [CourseController::class, 'deleteLesson'])->name('deleteLesson');
        Route::get('edit-lesson/{id}', [CourseController::class, 'editLesson']);
        Route::post('update-lesson/{uuid}', [CourseController::class, 'updateLesson'])->name('updateLesson');
        // Lecture
        Route::post('store-lecture', [CourseController::class, 'storeLecture'])->name('storeLecture');
        Route::post('update-lecture', [CourseController::class, 'updateLecture'])->name('updateLecture');
        Route::get('preview-lecture/{id}', [CourseController::class, 'previewLecture']);
        Route::get('edit-lecture/{id}', [CourseController::class, 'editLecture']);
        Route::post('delete-lecture', [CourseController::class, 'deleteLecture'])->name('deleteLecture');
        // Quiz
        Route::get('quizes/{lessonUuid}/{courseUuid}', [QuizController::class, 'adminQuiz'])->name('quizes');
        Route::post('/quizes/store', [QuizController::class, 'store'])->name('quizes.store');
        Route::post('/quizes/update/{id}', [QuizController::class, 'update'])->name('quizes.update');
        Route::Delete('/quizes/destroy/{id}', [QuizController::class, 'destroy'])->name('quizes.destroy');
    });

    // Manage Bootcamps
    Route::group(['prefix' => 'bootcamp', 'as' => 'bootcamp.'], function () {
        Route::get('/all-bootcamps', [BootcampController::class, 'allBootcamps'])->name('all');
        Route::get('/hold-bootcamps', [BootcampController::class, 'HoldBootcamps'])->name('hold');
        Route::get('/approve-bootcamps', [BootcampController::class, 'ApproveBootcamps'])->name('approve');
        Route::get('/pending-bootcamps', [BootcampController::class, 'PendingBootcamps'])->name('pending');
        Route::get('/status-change/{id}/{status}', [BootcampController::class, 'statusChange'])->name('status.change');
        Route::delete('/delete/{id}', [BootcampController::class, 'delete'])->name('delete');
        Route::get('show/{slug}/{lessonUuid?}/{lectureUuid?}', [BootcampController::class, 'show'])->name('show');
    });

    // Route::controller(CourseModuleController::class)->group(function () {
    //     Route::get('course-modules/{course_id}', 'index');
    //     Route::get('course-modules/{course_id}/create/', 'create');
    //     Route::get('course-modules/{course_id}/edit/{id}', 'edit')->name('course-modules.edit');
    //     Route::post('course-modules/{course_id}', 'store')->name('course-modules.store');
    // });

    // LESSON
    // Route::resource('lessons', CourseLessonsController::class);

    // COURSE CONTENT
    // Route::controller(CourseContentsController::class)->group(function () {
    //     Route::get('course-content/{lesson_id}', 'index')->name('course-content.index');
    //     Route::post('course-content/{lesson_id}', 'store')->name('course-content.store');
    //     Route::put('course-content/{lesson_id}', 'update')->name('course-content.update');
    //     Route::post('course-content/upload/image', 'imageUpload')->name('course-content.image_upload');
    //     Route::post('course-content/upload/file', 'fileUpload')->name('course-content.file_upload');
    //     Route::post('course-content/upload/video', 'videoUpload')->name('course-content.video_upload');
    //     Route::get('course-content/file/delete/{name}', 'fileDelete')->name('course-content.file_delete');
    // });

    // Bootcamp
    // Route::resource('bootcamp', BootcampController::class);
    // Route::controller(BootcampController::class)->group(function () {
    //     Route::get('/bootcamp/pending/list', 'pendingList')->name('bootcamp.pending.list');
    //     Route::post('/bootcamp/bulk/status-change', 'changeStatus')->name('bootcamp.status.bulk.change');
    //     Route::get('/bootcamp/{id}/attendee', 'attendee')->name('bootcamp.attendee');
    //     Route::delete('/bootcamp/attendee/delete/all', 'deleteAll');
    //     Route::post('/bootcamp/sponsored/all', 'sponsoredAll');
    //     Route::post('/bootcamp/payment/all', 'paymentAll');
    //     Route::post('/bootcamp/status-change/all', 'statusChangeAll');
    //     Route::post('/bootcamp/add-sponsor', 'addSponsor');
    //     Route::post('/bootcamp/add-payment/status', 'addPayment');
    //     Route::post('/bootcamp/attendee/status', 'attendeeStatus');
    //     Route::delete('/bootcamp/attendee/delete/{id}', 'attendeeDelete')->name('attendee.destroy');
    //     Route::get('/bootcamp/events/file/export/{id}', 'fileExport')->name('bootcamp.attendee.file-export');
    //     Route::get('/bootcamp/generate-pdf/{id}', 'generatePDF')->name('bootcamp.attendee.pdf');
    // });

    //Ticket
    Route::resource('/ticket', TicketController::class);
    Route::patch('/update-ticket-status/{ticket}', [TicketController::class, 'updateStatus'])->name('update.ticket.status');
    Route::patch('/assign-ticket/{ticket}', [TicketController::class, 'assignTicket'])->name('ticket.assign');
    Route::get('/notification', [NotificationController::class, 'adminAllNotification'])->name('notification.index');

    //# Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings/update', [SettingController::class, 'updateSettings'])->name('settings.update');
    Route::post('/settings/update/image', [SettingController::class, 'updateSettingsImage'])->name('settings.image.update');

    //# Cache Settings
    Route::get('/settings/cache', [SettingController::class, 'cache'])->name('settings.cache');
    Route::get('/settings/cache/update/{id}', [SettingController::class, 'cacheUpdate'])->name('settings.cache.update');

    // Withdraw Requests
    Route::prefix('withdraw')->as('withdraw.')->group(function () {
        Route::get('/requests', [WithdrawRequestController::class, 'index'])->name('request');
        Route::get('/request/show/{id}', [WithdrawRequestController::class, 'show'])->name('request.show');
        Route::get('/request/payout/{id}', [WithdrawRequestController::class, 'payout'])->name('request.payout');
        Route::post('/request/payout', [WithdrawRequestController::class, 'payoutStore'])->name('request.payout.store');
        Route::delete('/request/destroy/{id}', [WithdrawRequestController::class, 'destroy'])->name('request.destroy');
        Route::post('/request/reject/{id}', [WithdrawRequestController::class, 'reject'])->name('request.reject');
    });
    // Refund Requests
    Route::prefix('refund')->as('refund.')->group(function () {
        Route::get('/requests', [RefundRequestController::class, 'index'])->name('request');
        Route::get('/request/show/{id}', [RefundRequestController::class, 'show'])->name('request.show');
        Route::get('/request/payout/{id}', [RefundRequestController::class, 'payout'])->name('request.payout');
        Route::get('/request/partial-payout/{id}', [RefundRequestController::class, 'partialPayout'])->name('request.partialPayout');
        Route::post('/request/payout', [RefundRequestController::class, 'payoutStore'])->name('request.payout.store');
        Route::delete('/request/destroy/{id}', [RefundRequestController::class, 'destroy'])->name('request.destroy');
        Route::post('/request/reject/{id}', [RefundRequestController::class, 'reject'])->name('request.reject');
    });

    //Grade
    Route::resource('/grade', GradeController::class);

    //Blog
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('create', [BlogController::class, 'create'])->name('create');
        Route::post('store', [BlogController::class, 'store'])->name('store');
        Route::get('edit/{uuid}', [BlogController::class, 'edit'])->name('edit');
        Route::post('update/{uuid}', [BlogController::class, 'update'])->name('update');
        Route::delete('delete/{uuid}', [BlogController::class, 'delete'])->name('delete');
        Route::get('comment/list', [BlogController::class, 'blogCommentList'])->name('comment');
        Route::post('change-blog-comment-status', [BlogController::class, 'changeBlogCommentStatus'])->name('changeBlogCommentStatus');
        Route::delete('comment/delete/{id}', [BlogController::class, 'blogCommentDelete'])->name('comment.delete');
    });

    //wiki
    Route::group(['prefix' => 'wiki', 'as' => 'wiki.'], function () {
        Route::get('/', [WikiController::class, 'index'])->name('index');
        Route::get('create', [WikiController::class, 'create'])->name('create');
        Route::post('store', [WikiController::class, 'store'])->name('store');
        Route::get('edit/{id}', [WikiController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [WikiController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [WikiController::class, 'delete'])->name('delete');
    });
    //Coupon
    Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
        Route::get('/', [CouponController::class, 'index'])->name('index');
        Route::get('create', [CouponController::class, 'create'])->name('create');
        Route::post('store', [CouponController::class, 'store'])->name('store');
        Route::get('edit/{id}', [CouponController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [CouponController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [CouponController::class, 'delete'])->name('delete');
    });
    // Playground settings
    Route::group(['prefix' => 'playground', 'as' => 'playground.'], function () {
        Route::resource('category', PlaygroundCategoryController::class);
        Route::get('/', [PlaygroundController::class, 'index'])->name('index');
        Route::get('create/', [PlaygroundController::class, 'create'])->name('create');
        Route::post('store/', [PlaygroundController::class, 'store'])->name('store');
        Route::get('edit/{id}', [PlaygroundController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PlaygroundController::class, 'update'])->name('update');
        // Active and deactive
        Route::get('/setting', [PlaygroundSettingController::class, 'index'])->name('setting');
        Route::get('/active-deactive/{id}', [PlaygroundSettingController::class, 'activeOrDeactive'])->name('activeDeactive');
        // configuration
        Route::get('configuration/', [PlaygroundConfigurationController::class, 'index'])->name('configuration.index');
        Route::get('configuration/edit/{id}', [PlaygroundConfigurationController::class, 'edit'])->name('configuration.edit');
        Route::put('configuration/update/{id}', [PlaygroundConfigurationController::class, 'update'])->name('configuration.update');
        // Questions
        Route::get('/questions', [PlaygroundQuestionController::class, 'index'])->name('questions');
        Route::get('/questions/create', [PlaygroundQuestionController::class, 'create'])->name('questions.create');
        Route::post('/questions/store', [PlaygroundQuestionController::class, 'store'])->name('questions.store');
        Route::get('/questions/edit/{id}', [PlaygroundQuestionController::class, 'edit'])->name('questions.edit');
        Route::put('/questions/update/{id}', [PlaygroundQuestionController::class, 'update'])->name('questions.update');
        Route::delete('/questions/delete/{id}', [PlaygroundQuestionController::class, 'delete'])->name('questions.delete');
    });

    //AwsAccount
    Route::group(['prefix' => 'awsAccount', 'as' => 'awsAccount.'], function () {
        Route::get('/', [AwsAccountController::class, 'index'])->name('index');
        Route::get('create', [AwsAccountController::class, 'create'])->name('create');
        Route::post('store', [AwsAccountController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AwsAccountController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [AwsAccountController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [AwsAccountController::class, 'delete'])->name('delete');
    });
    //GcpProject
    Route::group(['prefix' => 'gcpProject', 'as' => 'gcpProject.'], function () {
        Route::get('/', [GcpProjectController::class, 'index'])->name('index');
        Route::get('create', [GcpProjectController::class, 'create'])->name('create');
        Route::post('store', [GcpProjectController::class, 'store'])->name('store');
        Route::get('edit/{id}', [GcpProjectController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [GcpProjectController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [GcpProjectController::class, 'delete'])->name('delete');
    });

    // Event
    // Route::group(['prefix' => 'event', 'as' => 'event.'], function () {
    //     Route::get('/', [EventController::class, 'index'])->name('index');
    //     Route::get('/create', [EventController::class, 'create'])->name('create');
    //     Route::post('/store', [EventController::class, 'store'])->name('store');
    //     Route::delete('/delete', [EventController::class, 'delete']);
    // });
    Route::group(['prefix' => 'event', 'as' => 'event.'], function () {
        Route::resource('events', EventEventController::class);
        Route::resource('speaker', SpeakerController::class)->except('show');
        Route::resource('attendee', AttendeeController::class)->except('create', 'store', 'show');
        Route::get('/pending-events', [EventEventController::class, 'memberEvent'])->name('pending.events');
        Route::get('/speaker/events/{id}', [SpeakerController::class, 'showSpeakerEvents'])->name('speaker.events');

    });

    // Ebook
    Route::group(['prefix' => 'ebook', 'as' => 'ebook.'], function () {
        Route::get('/', [EbookController::class, 'index'])->name('index');
        Route::get('create', [EbookController::class, 'create'])->name('create');
        Route::post('store', [EbookController::class, 'store'])->name('store');
        Route::get('edit/{id}', [EbookController::class, 'edit'])->name('edit');
        Route::get('show/{slug}', [EbookController::class, 'show'])->name('show');
        Route::post('update/{id}', [EbookController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [EbookController::class, 'delete'])->name('delete');
        Route::get('/reserve', [EbookController::class, 'reserveEbook'])->name('reserve');
        Route::delete('reserve/delete/{id}', [EbookController::class, 'deleteReserveEbook'])->name('reserve.delete');
        Route::get('/buy-histories', [EbookController::class, 'enrollEbooks'])->name('buy.history');
        Route::post('/assign-reviewer', [EbookController::class, 'assignReviewer'])->name('assignReviewer');
        Route::get('/invoice/download/{user_id}/{ebook_id}', [EbookController::class, 'downloadInvoice'])->name('invoice.download')->withoutMiddleware('prevent_back_history');

    });

    // Policy Settings
    Route::group(['prefix' => 'policy/settings', 'as' => 'policy.settings.'], function () {
        // Privacy
        Route::get('/privacy', [PolicySettingController::class, 'privacy'])->name('privacy');
        Route::put('/privacy/update', [PolicySettingController::class, 'privacyUpdate'])->name('privacy.update');
        // Terms and conditions
        Route::get('/terms-conditions', [PolicySettingController::class, 'termsAndConditions'])->name('terms');
        Route::put('/terms-conditions/update', [PolicySettingController::class, 'termsAndConditionsUpdate'])->name('terms.update');
        // Refund
        Route::get('/refund', [PolicySettingController::class, 'refund'])->name('refund');
        Route::put('/refund/update', [PolicySettingController::class, 'refundUpdate'])->name('refund.update');
        // Cookie
        Route::get('/cookie', [PolicySettingController::class, 'cookie'])->name('cookie');
        Route::put('/cookie/update', [PolicySettingController::class, 'cookieUpdate'])->name('cookie.update');
    });

    // faq routes
    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
        Route::resource('topics', FaqTopicController::class)->except('show');
        Route::resource('faqs', FaqController::class)->except('show');
    });

    //Certificate
    Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate');
    Route::get('/certificate/edit/{uuid}', [CertificateController::class, 'edit'])->name('certificate.edit');
    Route::put('/certificate/update/{uuid}', [CertificateController::class, 'update'])->name('certificate.update');

    // Questions
    Route::group(['prefix' => 'exams', 'as' => 'exams.'], function () {
        // Exam
        Route::get('/', [ExamController::class, 'index'])->name('index');
        Route::get('/create', [ExamController::class, 'create'])->name('create');
        Route::post('/store', [ExamController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ExamController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ExamController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ExamController::class, 'destroy'])->name('destroy');
        Route::resource('enroll-exams', EnrollExamController::class)->only('index');
        Route::resource('exams-result', ExamResultController::class)->only('index');
        Route::get('/questions/{uuid}', [QuestionController::class, 'index'])->name('questions');
        Route::post('/questions/store', [QuestionController::class, 'store'])->name('questions.store');
        Route::post('/questions/update/{id}', [QuestionController::class, 'update'])->name('questions.update');
        Route::Delete('/questions/destroy/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');
    });

    // users Login
    Route::post('users/login', [SpoofLoginController::class, 'loginAsUser'])->name('users.login');

    // Review manage
    Route::resource('/review', ReviewController::class)->except('show', 'create', 'store', 'edit');
    Route::resource('/comment', CommentController::class)->except('show', 'create', 'store', 'edit');

    // Manage forum
    Route::group(['prefix' => 'forum', 'as' => 'forum.'], function () {
        Route::get('/', [ForumController::class, 'index'])->name('index');
        Route::put('changeStatus/{id}', [ForumController::class, 'changeStatus'])->name('changeStatus');
        Route::delete('delete/{id}', [ForumController::class, 'delete'])->name('delete');
    });

    // Manage Payments
    Route::group(['prefix' => 'payment', 'as' => 'payment.'], function () {
        Route::get('/', [PaymentController::class, 'index'])->name('index');
        Route::delete('delete/{id}', [PaymentController::class, 'delete'])->name('delete');
    });
    // Manage Invoices
    Route::group(['prefix' => 'invoice', 'as' => 'invoice.'], function () {
        Route::get('/', [InvoiceController::class, 'index'])->name('index');
        Route::delete('delete/{id}', [InvoiceController::class, 'delete'])->name('delete');
        Route::get('view/{id}', [InvoiceController::class, 'viewInvoice'])->name('view');
        Route::get('download/{id}', [InvoiceController::class, 'generateInvoice'])->name('download');
    });

    // Manage Invoices
    Route::group(['prefix' => 'cms'], function () {
        Route::get('pages', [PageController::class, 'index'])->name('cms.pages.index');
        Route::get('pages/edit/{id}', [PageController::class, 'edit'])->name('cms.pages.edit');
        Route::post('upload-file-school-section', [PageController::class, 'cmsUpdateFile'])->withoutMiddleware(['auth', 'is_admin', 'prevent_back_history']);
    });

    // announcements
    Route::resource('/announcement', AnnouncementController::class)->except('show');
    Route::resource('/contact-us', ContactUsController::class)->only('index', 'show', 'destroy');

    // demo books
    Route::resource('/demo-books', DemoBookController::class)->only('index', 'show', 'destroy');
    Route::post('/bulk-action/{model}', [BulkActionController::class, 'bulkAction'])->name('bulkAction');
});

Route::get('backToAdmin/{id}', [SpoofLoginController::class, 'backToAdmin'])->name('backToAdmin');

Route::get('test/', function () {
    $lab['home_url'] = route('student.playground');
    dd($lab);
});
