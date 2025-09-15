<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\UserAuthController;
use App\Http\Controllers\Api\V1\Exam\ExamController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\LogoutController;
use App\Http\Controllers\Api\V1\Ebook\EbookController;
use App\Http\Controllers\Api\V1\Forum\ForumController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Course\CourseController;
use App\Http\Controllers\Api\V1\Plan\PurchaseController;
use App\Http\Controllers\Api\V1\Bootcamp\BootcampController;
use App\Http\Controllers\Api\V1\Auth\ForgetPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth:sanctum', 'log_api_call'])->group(function () {

    //bootcamps
    Route::get('bootcamps', [BootcampController::class, 'index']);
    Route::get('bootcamps/{id}', [BootcampController::class, 'show']);
    // Route::apiResource('bootcamps', BootcampController::class);
    //courses

    //courses
    Route::get('courses', [CourseController::class, 'index']);
    Route::get('courses/{id}', [CourseController::class, 'show']);
    // Route::apiResource('courses', CourseController::class);

    //ebooks
    Route::get('ebooks', [EbookController::class, 'index']);
    Route::get('ebooks/{id}', [EbookController::class, 'show']);
    // Route::apiResource('ebooks', EbookController::class);

    // Forums
    Route::get('forums', [ForumController::class, 'index']);
    Route::get('forums/{id}', [ForumController::class, 'show']);
    // Route::apiResource('forums', ForumController::class);

    // exams
    Route::get('exams', [ExamController::class, 'index']);
    Route::get('exams/{id}', [ExamController::class, 'show']);
    // Route::apiResource('exams', ExamController::class);
});

// Routes only accessible in local or staging environment

if (app()->environment('local', 'staging')) {
    Route::post('auth/register', RegisterController::class);
    Route::post('auth/login', LoginController::class);

    Route::post('user-auth/register', [UserAuthController::class, 'register']);
    Route::post('user-auth/login', [UserAuthController::class, 'login']);
    Route::post('user-auth/refresh', [UserAuthController::class, 'refresh']);

    //forget password
    Route::controller(ForgetPasswordController::class)->prefix('forget-password')->group(function () {
        Route::post('/', 'forgetPassword');
        Route::get('/reset-password/{token}', 'verifyToken');
    });
    Route::post('/reset-password', [ForgetPasswordController::class, 'resetPassword']);

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('user-auth/me', [UserAuthController::class, 'me']);
        Route::post('auth/logout', LogoutController::class);

        Route::get('/test/purchase-plan', [PurchaseController::class, 'purchaseAPlan']);
    });
}
