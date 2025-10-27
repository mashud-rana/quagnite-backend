<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Student\VoteController;
use App\Http\Controllers\Student\Course\NoteController;
use App\Http\Controllers\Api\V1\Student\Exam\ExamController;
use App\Http\Controllers\Api\V1\Student\ReviewVoteController;
use App\Http\Controllers\Api\V1\Student\Ebook\EbookController;
use App\Http\Controllers\Api\V1\Student\Course\CourseController;
use App\Http\Controllers\Api\V1\Student\Resume\ResumeController;
use App\Http\Controllers\Api\V1\Student\Billing\BillingController;
use App\Http\Controllers\Api\V1\Student\Invoice\InvoiceController;
use App\Http\Controllers\Api\V1\Student\Profile\ProfileController;
use App\Http\Controllers\Api\V1\Student\Bootcamp\BootcampController;
use App\Http\Controllers\Api\V1\Student\Invoice\CertificateController;
use App\Http\Controllers\Api\V1\Student\Difficulty\DifficultyController;
use App\Http\Controllers\Api\V1\Student\Category\CourseCategoryController;

Route::prefix('student')->name('student.')->group(function () {

    //-------------- Start Certificate (Public) --------------
    Route::prefix('certificates')->group(function () {
        Route::controller(CertificateController::class)->group(function () {
            Route::get('/my-certificates/download/{uuid}', "download");
            Route::get('/my-certificates/view/{uuid}', "viewCertificate");
            Route::get('/my-certificates/{uuid}', "certificates");
        });
    });

    // // Protected (sanctum + role + ability)
    // Route::middleware(['auth:sanctum', 'role:coach', 'abilities:coach:*'])->group(function () {
    Route::middleware(['auth:sanctum', 'user_type:student'])->group(function () {
        //------------- Profile ----------------------------
        Route::get('/get-profile-details', [ProfileController::class, "show"]);
        Route::put('/update-profile/{id}', [ProfileController::class, "updateProfile"]);
        Route::put('/update-profile-photo/{id}', [ProfileController::class, "updateProfilePhoto"]);
        Route::put('/password/update/{id}', [ProfileController::class, 'updatePassword']);
        Route::get('/get-user-infos', [ProfileController::class, "getUserInfos"]);
        Route::put('/update-user-infos', [ProfileController::class, "updateUserInfos"]);

        //------------- End Profile -------------------------

        //------------- My Courses -------------------------
        Route::prefix('courses')->name('courses.')->group(function () {

        //-------------- Start Course Details --------------
        Route::controller(CourseController::class)->group(function () {
            //-------------- enrolled courses --------------
            Route::get('/get-my-courses', "myCourses");
            Route::get('/get-my-courses-subjects', "myCoursesSubjects");
            Route::get('/get-filters-data', "getFiltersData");
            //-----------End enrolled courses --------------
            Route::get('/{slug}/enrolled-check', "enrolledCheck");
            Route::get('/{slug}/show', "courseDetails");
            Route::post('/submit-review', 'reviewSubmit');
            // ---------- discussion --------------//
            Route::post('/submit-discussion', 'discussionSubmit');
            Route::post('/submit-discussion-comment', 'discussionCommentSubmit');
            Route::post('/lesson-lecture-preview', 'lecturePreview');
            Route::get('/lesson-quiz-preview', 'quizPreview');
            //notes
            Route::get('/note/{note_id}', 'getCourseNote');
            Route::post('/post-note', 'storeCourseNote');
            Route::delete('/delete-note/{note_id}', 'destroyCourseNote');
            Route::put('/note/{note_id}/update', 'updateCourseNote');
        });
        //--------------End  Course Details --------------
        });
        // Review Vote
        Route::post('/vote', [VoteController::class, 'vote']);

        //-------------- Start Bootcamp --------------
        Route::prefix('bootcamp')->group(function () {
            Route::controller(BootcampController::class)->group(function () {
                Route::get('/get-my-bootcamps', "myBootcamps");
                Route::get('/{slug}/show', "bootcampDetails");
                Route::post('/submit-review', 'reviewSubmit');
                Route::post('/submit-discussion', 'discussionSubmit');
                Route::post('/submit-discussion-comment', 'discussionCommentSubmit');
                Route::get('/join/lecture/{uuid}', 'joinClass');
                //--------------- notes --------------
                Route::post('/post-note', 'storeNote');
                Route::delete('/delete-note/{note_id}', 'destroyCourseNote');
                Route::put('/note/{note_id}/update', 'updateCourseNote');
            });
        });

            //-------------End Bootcamp --------------
        //------------- End My Courses -------------------------
        //-------------  Courses Category-------------------------
        Route::get('/get-courses-category', [CourseCategoryController::class, "getCategories"]);
        //-------------End  Courses Category-------------------------
        //-------------  Courses difficulty-------------------------
        Route::get('/get-difficulty-level', [DifficultyController::class, "getDifficulties"]);
        //-------------End  Courses difficulty-------------------------

         //-------------- Start E-book --------------
        Route::prefix('ebooks')->group(function () {
            Route::controller(EbookController::class)->group(function () {
                Route::get('/get-my-ebooks', "myEbooks");
                Route::get('/my-ebooks/download/{uuid}', "download");

            });
        });
        //--------------End  E-book --------------
        //-------------- Start Invoice --------------
        Route::prefix('invoices')->group(function () {
            Route::controller(InvoiceController::class)->group(function () {
                Route::get('/get-my-invoices', "myInvoices");
                Route::get('/my-invoices/download/{id}', "download");
                Route::get('/my-invoices/view/{id}', "viewInvoice");
            });
        });
        //--------------End  Invoice --------------
        //-------------- Start Certificate --------------
        Route::prefix('certificates')->group(function () {
            Route::controller(CertificateController::class)->group(function () {
                Route::get('/get-my-certificates', "myCertificates");

            });
        });
        //--------------End  Invoice --------------
        //-------------- Start Resumes --------------
        Route::prefix('resumes')->group(function () {
            Route::controller(ResumeController::class)->group(function () {
                Route::get('/get-my-resumes', "myResumes");
                Route::get('/my-resumes/download/{uuid}', "download");
                Route::post('/resume-upload', 'uploadResume');
                Route::delete('/my-resumes/{uuid}/delete', 'deleteResume');
            });
        });
        //--------------End  Resumes --------------

        //-------------- Start exam --------------
        Route::prefix('exam')->group(function () {
            Route::controller(ExamController::class)->group(function () {
                Route::get('/get-my-exams', "myExams");
                Route::get('/start/{examuuid}/{enrolluuid}','examStart');
                Route::post('/submit','examSubmit');
                Route::post('/results', 'getExamResults');
                Route::get('/progress/{enrolluuid}','getExamProgressData');
            });
        });

            //-------------End exam --------------


    });
});
