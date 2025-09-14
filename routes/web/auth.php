<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\Auth\SocialiteLoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/login-as', [AuthController::class, 'LoginAs'])->name('auth.login.as');
    // Login
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/auth/login', [AuthController::class, 'loginSubmit'])->name('auth.loginSubmit');
    // register
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'registerSubmit'])->name('auth.registerSubmit');

    // Account verification
    Route::get('/account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('account.verify');

    // Show Forget password email form
    Route::get('/forget-password-email', [AuthController::class, 'showForgetPasswordEmail'])->name('forget.password.email');
    // Send Reset Password Link
    Route::post('/send-reset-password', [AuthController::class, 'sendResetPasswordLink'])->name('send.reset.password');

    // Show reset link send message
    Route::get('/reset-link-sent', [AuthController::class, 'sentResetLink'])->name('reset.link.sent');

    // Reset Password
    Route::get('/reset-password/{token}', [AuthController::class, 'verifyResetPassword'])->name('reset.password.verify');
    Route::post('/reset-password', [AuthController::class, 'submitResetPassword'])->name('reset.password');

    // Socialite Login
    Route::get('auth/{provider}', [SocialiteLoginController::class, 'redirectToProvider'])->name('login.provider');
    Route::get('auth/{provider}/callback', [SocialiteLoginController::class, 'handleProviderCallback']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
