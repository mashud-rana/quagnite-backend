<?php

use App\Http\Controllers\Api\V1\Teacher\Course\CourseCategory\CourseCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('teacher')->name('teacher.')->group(function () {



    // // Protected (sanctum + role + ability)
    // Route::middleware(['auth:sanctum', 'role:coach', 'abilities:coach:*'])->group(function () {
    Route::middleware(['auth:sanctum', 'user_type:teacher'])->group(function () {

        Route::get('course/categories', [CourseCategoryController::class, 'categoryList']);
        Route::get('/course/categories/{id}/sub-categories',[CourseCategoryController::class, 'courseSubCategoryItem']);
    });
});
