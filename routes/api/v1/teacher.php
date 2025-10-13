<?php

use App\Http\Controllers\api\V1\Teacher\Announcement\AnnouncementController;
use App\Http\Controllers\Api\V1\Teacher\Benefits\BenefitsController;
use App\Http\Controllers\Api\V1\Teacher\Course\CourseCategory\CourseCategoryController;
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

    });
});
