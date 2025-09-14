<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\Course\NoteController;
use App\Http\Controllers\Api\V1\Student\Course\CourseController;
use App\Http\Controllers\Api\V1\Student\Profile\ProfileController;
use App\Http\Controllers\Api\V1\Student\Difficulty\DifficultyController;
use App\Http\Controllers\Api\V1\Student\Category\CourseCategoryController;



Route::prefix('student')->name('student.')->group(function () {


    // // Protected (sanctum + role + ability)
    // Route::middleware(['auth:sanctum', 'role:coach', 'abilities:coach:*'])->group(function () {
    Route::middleware(['auth:sanctum', 'user_type:student'])->group(function () {
        //------------- Profile ----------------------------
        Route::get('/get-profile-details', [ProfileController::class, "show"]);
        Route::put('/update-profile/{id}', [ProfileController::class, "updateProfile"]);
        Route::put('/password/update/{id}', [ProfileController::class, 'updatePassword']);

        //------------- End Profile -------------------------

        //------------- My Courses -------------------------
        Route::prefix('courses')->name('courses.')->group(function () {
            //-------------- enrolled courses --------------
            Route::get('/get-my-courses', [CourseController::class, "myCourses"]);
            Route::get('/get-my-courses-subjects', [CourseController::class, "myCoursesSubjects"]);
            //--------------End enrolled courses --------------
            //-------------- Start Course Details --------------
            Route::get('/{slug}/show    ', [CourseController::class, "courseDetails"]);
            Route::post('/submit-review', [CourseController::class, 'reviewSubmit']);
            Route::post('/submit-discussion', [CourseController::class, 'discussionSubmit']);
            Route::post('/submit-discussion-comment', [CourseController::class, 'discussionCommentSubmit']);
            Route::post('/post-note', [CourseController::class, 'storeCourseNote']);
            Route::post('/lesson-lecture-preview', [CourseController::class, 'lecturePreview']);
            Route::get('/lesson-quiz-preview', [CourseController::class, 'quizPreview']);
            //--------------End Start Course Details --------------

        });
        //------------- End My Courses -------------------------
        //-------------  Courses Category-------------------------
        Route::get('/get-courses-category', [CourseCategoryController::class, "getCategories"]);
        //-------------End  Courses Category-------------------------
        //-------------  Courses difficulty-------------------------
        Route::get('/get-difficulty-level', [DifficultyController::class, "getDifficulties"]);
        //-------------End  Courses difficulty-------------------------

    });
});
