<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\Course\NoteController;
use App\Http\Controllers\Api\V1\Student\Course\CourseController;
use App\Http\Controllers\Api\V1\Student\Profile\ProfileController;
use App\Http\Controllers\Api\V1\Student\Bootcamp\BootcampController;
use App\Http\Controllers\Api\V1\Student\Difficulty\DifficultyController;
use App\Http\Controllers\Api\V1\Student\Category\CourseCategoryController;



Route::prefix('student')->name('student.')->group(function () {


    // // Protected (sanctum + role + ability)
    // Route::middleware(['auth:sanctum', 'role:coach', 'abilities:coach:*'])->group(function () {
    Route::middleware(['auth:sanctum', 'user_type:student'])->group(function () {
        //------------- Profile ----------------------------
        Route::get('/get-profile-details', [ProfileController::class, "show"]);
        Route::put('/update-profile/{id}', [ProfileController::class, "updateProfile"]);
        Route::put('/update-profile-photo/{id}', [ProfileController::class, "updateProfilePhoto"]);
        Route::put('/password/update/{id}', [ProfileController::class, 'updatePassword']);

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

                Route::get('/{slug}/show', "courseDetails");
                Route::post('/submit-review', 'reviewSubmit');
                Route::post('/submit-discussion', 'discussionSubmit');
                Route::post('/submit-discussion-comment', 'discussionCommentSubmit');
                Route::post('/post-note', 'storeCourseNote');
                Route::post('/lesson-lecture-preview', 'lecturePreview');
                Route::get('/lesson-quiz-preview', 'quizPreview');
            });
            //--------------End  Course Details --------------


        });

        //-------------- Start Bootcamp --------------
        Route::prefix('bootcamp')->group(function () {
            Route::controller(BootcampController::class)->group(function () {
                Route::get('/get-my-bootcamps', "myBootcamps");
                Route::get('/{slug}', "bootcampDetails");
                Route::post('/submit-review', 'reviewSubmit');
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

    });
});
