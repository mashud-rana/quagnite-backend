<?php

use App\Http\Controllers\Api\V1\Teacher\Announcement\AnnouncementController;
use App\Http\Controllers\Api\V1\Teacher\Benefits\BenefitsController;
use App\Http\Controllers\Api\V1\Teacher\Course\CourseCategory\CourseCategoryController;
use App\Http\Controllers\Api\V1\Teacher\Course\CourseController;
use App\Http\Controllers\Api\V1\Teacher\Difficulty\DifficultyController;
use App\Http\Controllers\Api\V1\Teacher\Language\LanguageController;
use App\Http\Controllers\Api\V1\Teacher\Tag\TagController;
use Illuminate\Support\Facades\Route;

Route::prefix('teacher')->name('teacher.')->group(function () {



    // // Protected (sanctum + role + ability)
    // Route::middleware(['auth:sanctum', 'role:coach', 'abilities:coach:*'])->group(function () {
    Route::middleware(['auth:sanctum', 'user_type:teacher'])->group(function () {

        Route::get('course/categories', [CourseCategoryController::class, 'categoryList']);
        Route::get('/course/categories/{id}/sub-categories',[CourseCategoryController::class, 'courseSubCategoryItem']);


//        Resource Routes
        Route::apiResource('announcements', AnnouncementController::class)->only(['index']);
        Route::apiResource('benefits', BenefitsController::class)->only(['index']);
        Route::apiResource('languages', LanguageController::class)->only(['index']);
        Route::apiResource('difficulty', DifficultyController::class)->only(['index']);
        Route::apiResource('tags', TagController::class)->only(['index']);

        Route::prefix('course')->group(function () {
//            Course Create
            Route::get('/', [CourseController::class, 'courseList']);
            Route::get('/{id}', [CourseController::class, 'courseItem']);
            Route::post('create', [CourseController::class, 'store']);
            Route::post('update', [CourseController::class, 'updateCourse']);


            // Chunk uploads
            Route::post('chunk-upload', [CourseController::class, 'storeChunkFile']);
            Route::patch('chunk-upload', [CourseController::class, 'updateChunkFile']);
            Route::delete('chunk-upload', [CourseController::class, 'deleteChunkFile']);
        });

    });
});
