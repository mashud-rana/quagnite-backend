<?php

use App\Http\Controllers\Design\DesignController;
use App\Http\Controllers\Design\NewDesignController;
use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Route;

//test design route for sani
// Route::get('/test-design', [DesignController::class, 'index'])->name('test-design');
// Route::get('/test-coaching', [DesignController::class, 'coaching'])->name('test-coaching');
// Route::get('/test-online-bootcamp', [DesignController::class, 'onlineBootcamp'])->name('test-online-bootcamp');
// Route::get('/test-course-details', [DesignController::class, 'courseDetails'])->name('test-course-details');
// Route::get('/test-business', [DesignController::class, 'business'])->name('test-business');
// Route::get('/test-helpdesk', [DesignController::class, 'helpdesk'])->name('test-helpdesk');
// Route::get('/test-coaches-sechedule', [DesignController::class, 'coaches'])->name('test-coaches-sechedule');
// Route::get('/test-coaches-sechedule-grid', [DesignController::class, 'coachesGrid'])->name('test-coaches-sechedule-grid');
// Route::get('/test-single-coach-details', [DesignController::class, 'singleCoach'])->name('test-single-coach-details');
// Route::get('/test-coaches-bootcump-grid', [DesignController::class, 'bootcampList'])->name('test-coaches-bootcump-grid');
// Route::get('/test-blog-list', [DesignController::class, 'blogList'])->name('test-blog-list');
// // Route::get('/test-video-course-content',[DesignController::class,'videoCourse'])->name('test-video-course-content');
// Route::get('/test-exam-test', [DesignController::class, 'examTest'])->name('test-exam-test');
// Route::get('/test-exam-test-result', [DesignController::class, 'examTestResult'])->name('test-exam-test-result');
// Route::get('/test-playground', [DesignController::class, 'playground'])->name('test-playground');
// Route::get('/test-playground-compiler', [DesignController::class, 'playgroundCompiler'])->name('test-playground-compiler');
// Route::get('/test-aws', [DesignController::class, 'aws'])->name('test-aws');
// Route::get('/test-awsInfo', [DesignController::class, 'awsInfo'])->name('test-awsInfo');

// // new design
// Route::get('new-index', [NewDesignController::class, 'index'])->name('new-index');
// Route::get('new-video-course-content', [NewDesignController::class, 'videoCourse'])->name('new-video-course-content');
// Route::get('new-student-dashboard', [NewDesignController::class, 'studentDashboard'])->name('new-student-dashboard');
// Route::get('new-student-profile-setting', [NewDesignController::class, 'profileSetting'])->name('new-student-profile-setting');
// Route::get('new-student-my-course', [NewDesignController::class, 'studentMyCourse'])->name('new-student-my-course');
// Route::get('new-my-certificates', [NewDesignController::class, 'myCertificate'])->name('new-my-certificates');
// Route::get('new-purchase-history', [NewDesignController::class, 'purchaseHistory'])->name('new-purchase-history');
// Route::get('new-business', [NewDesignController::class, 'business'])->name('new-business');
// Route::get('new-course-details', [NewDesignController::class, 'courseDetails'])->name('new-course-details');
// Route::get('new-bootcamps-details', [NewDesignController::class, 'bootcampDetails'])->name('new-bootcamps-details');
// Route::get('new-online-bootcamp', [NewDesignController::class, 'onlineBootcamp'])->name('new-online-bootcamp');
// Route::get('new-cart', [NewDesignController::class, 'cart'])->name('new-cart');
// Route::get('new-billing', [NewDesignController::class, 'billing'])->name('new-billing');
// Route::get('new-all-playground', [NewDesignController::class, 'allPlayground'])->name('new-all-playground');
// Route::get('new-blog-details', [NewDesignController::class, 'blogDetails'])->name('new-blog-details');
// Route::get('new-e-book', [NewDesignController::class, 'eBook'])->name('new-e-book');
// Route::get('new-reserve-order', [NewDesignController::class, 'reserveOrder'])->name('new-reserve-order');
// Route::get('new-create-exams', [NewDesignController::class, 'createExam'])->name('new-create-exams');
// Route::get('new-blog-list', [NewDesignController::class, 'blogList'])->name('new-blog-list');
// Route::get('coaching-details', [NewDesignController::class, 'coachingDetails'])->name('coaching-details');
// // Route::get('wallet', [NewDesignController::class, 'wallet'])->name('wallet');
// // Route::get('beneficiary', [NewDesignController::class, 'beneficiary'])->name('beneficiary');
// Route::get('teacher-dashboard', [NewDesignController::class, 'teacherDashboard'])->name('teacher-dashboard');
// Route::get('teacher-course-create', [NewDesignController::class, 'teacherCourseCreate'])->name('teacher-course-create');
// Route::get('coach-schedule', [NewDesignController::class, 'coachSchedule'])->name('coach-schedule');
// version 1
// Route::get('/v1', [FrontController::class, 'indexV1'])->name('front.home.v1');
// Route::get('/bootcamp-list', [NewDesignController::class, 'newbootcampList'])->name('front.bootcamp-list');
// Route::get('/coaches-list', [NewDesignController::class, 'coachList'])->name('front.coaches-list');
// Route::get('/bootcamp-overview', [NewDesignController::class, 'bootcampOverview'])->name('front.bootcamp-overview');
// Route::get('/new-course-single', [NewDesignController::class, 'courseSingle'])->name('front.new-course-single');
// Route::get('/coach-single', [NewDesignController::class, 'coachDetails'])->name('front.coach-single');

// Route::get('/all-exam', [NewDesignController::class, 'allExam'])->name('front.all-exam');

// Route::get('/create-become', [NewDesignController::class, 'createBecome'])->name('front.create-become');
// Route::get('/coaches-single', [NewDesignController::class, 'newCoachSinglePage'])->name('coaches-single');

// Route::get('/exam-single-page', [NewDesignController::class, 'examSingle'])->name('exam-single-page');

// // Route::get('/coaches-signle', [NewDesignController::class, 'newCoachSinglePage'])->name('coaches-signle');
// Route::get('/student-support-ticket', [NewDesignController::class, 'supportTicket'])->name('student-support-ticket');
// Route::get('/student-support-ticket-list', [
//     NewDesignController::class,
//     'supportTicketList',
// ])->name('student-support-ticket-list');
// Route::get('/wiki-details-list', [NewDesignController::class, 'wikiDetails'])->name('wiki-details-list');
// Route::get('/wiki-list', [NewDesignController::class, 'wikiDetailsList'])->name('wiki-details-list');
// Route::get('/ebook-details', [NewDesignController::class, 'eBookDetails'])->name('ebook-details');
// Route::get('/student-support-ticket-details', [
//     NewDesignController::class,
//     'supportTicketDetails',
// ])->name('student-support-ticket-details');
// Route::get('/not-found', [
//     NewDesignController::class,
//     'notFound',
// ])->name('not-found');
// Route::get('/teacher-all-course', [
//     NewDesignController::class,
//     'teacherAllCourse',
// ])->name('teacher-all-course');
// Route::get('/student-bootcamp', [
//     NewDesignController::class,
//     'studentBootcamp',
// ])->name('student-bootcamp');
// Route::get('/my-bootcamps', [
//     NewDesignController::class,
//     'myBootcamps',
// ])->name('my-bootcamps');
// Route::get('/my-session', [
//     NewDesignController::class,
//     'mySession',
// ])->name('my-session');
// Route::get('/my-exam', [
//     NewDesignController::class,
//     'myExam',
// ])->name('my-exam');
// Route::get('/ebook-details-download', [NewDesignController::class,
// 'eBookDetailsDownload'])->name('ebook-details-download');
// Route::get('/blog-page', [NewDesignController::class, 'BlogPage'])->name('blog-page');
// Route::get('/event-page', [NewDesignController::class, 'EventPage'])->name('event-page');
// Route::get('/wiki-details', [NewDesignController::class, 'wikiDetails'])->name('wiki-details');
// Route::get('/blog-list-details', [NewDesignController::class, 'blogListDetails'])->name('blog-list-details');
// Route::get('/teacher-create-exam', [NewDesignController::class, 'teacherCreateExam'])->name('teacher-create-exam');

// Route::get('/teacher-add-exam', [NewDesignController::class, 'teacherAddExam'])->name('teacher-add-exam');
// Route::get('/create-question', [NewDesignController::class, 'createQuestion'])->name('create-question');
// Route::get('/my-book', [NewDesignController::class, 'myBook'])->name('my-book');
// Route::get('/coach-enroll', [NewDesignController::class, 'enrollCoachList'])->name('coach-enroll');
// Route::get('/student-activities', [NewDesignController::class, 'studentActivities'])->name('coach-enroll');
// Route::get('/teacher-course', [NewDesignController::class, 'teacherCourse'])->name('teacher-course');
// Route::get('/teacher-bootcamp', [NewDesignController::class, 'teacherBootcamp'])->name('teacher-bootcamp');
// Route::get('/help-center', [NewDesignController::class, 'helpCenter'])->name('help-center');
// Route::get('/playground-details', [NewDesignController::class, 'playgroundDetails'])->name('playground-details');
// Route::get('/event-details', [NewDesignController::class, 'eventDetails'])->name('event-details');
// Route::get('/help-center-question', [NewDesignController::class, 'helpCenterQuestion'])->name('help-center-question');
// Route::get('/help-center-request-form', [
//     NewDesignController::class,
//     'helpCenterRequest',
// ])->name('help-center-request-form');
// Route::get('/protected-exam', [
//     NewDesignController::class,
//     'protectedExam',
// ])->name('protected-exam');
// Route::get('/protected-exam-introduction', [
//     NewDesignController::class,
//     'protectedExamIntroduction',
// ])->name('protected-exam-introduction');
// Route::get('/protected-exam-start', [
//     NewDesignController::class,
//     'protectedExamStart',
// ])->name('protected-exam-start');
// Route::get('/organization', [
//     NewDesignController::class,
//     'organization',
// ])->name('organization');
// Route::get('/create-ebook', [NewDesignController::class, 'createEbook'])->name('create-ebook');
// Route::get('/student-ebook', [NewDesignController::class, 'studentEbook'])->name('student-ebook');
// Route::get('/coach-single', [NewDesignController::class, 'singleCoach'])->name('coach-single');
// Route::get('/notification', [NewDesignController::class, 'notification'])->name('notification');
// Route::get('/announcement', [NewDesignController::class, 'announcement'])->name('announcement');
// Route::get('/protected-exam-score', [NewDesignController::class, 'protectedExamScore'])->name('protected-exam-score');
// Route::get('/student-exam', [NewDesignController::class, 'studentExam'])->name('student-exam');
// Route::get('/student-result', [NewDesignController::class, 'studentResult'])->name('student-result');
// Route::get('/student-all-exam', [NewDesignController::class, 'studentAllExam'])->name('student-all-exam');
// Route::get('/all-student-enrole', [NewDesignController::class, 'allStudentEnrole'])->name('all-student-enrole');
// privacy policy
// Route::get('/privacy-policy', [NewDesignController::class, 'privacyPolicy'])->name('privacy-policy');
// Route::get('/terms-condition', [NewDesignController::class, 'termsCondition'])->name('terms-condition');
// Route::get('/certificate', [NewDesignController::class, 'certificate'])->name('certificate');
// Route::get('/student-chat', [NewDesignController::class, 'studentChat'])
//     ->name('frontend.student-chat');
