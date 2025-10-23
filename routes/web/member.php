<?php

use App\Http\Controllers\Member\BecomeController;
use App\Http\Controllers\Member\Dashboard\DashboardController;
use App\Http\Controllers\Member\Event\MemberEventController;
use App\Http\Controllers\Member\Profile\ProfileController;
use App\Http\Controllers\Member\Subscription\SubscriptionListController;
use Illuminate\Support\Facades\Route;

Route::prefix('itclanbd/member')->as('member.')->middleware(['auth', 'is_member', 'prevent_back_history'])->group(function () {

    // profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/pass/update/', [ProfileController::class, 'updatePassword'])->name('update.password');

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/subscriptions', [SubscriptionListController::class, 'index'])->name('subscription');

    //Become a teacher
    Route::get('/become-a-teacher', [BecomeController::class, 'becomeATeacher'])->name('becomeATeacher');
    Route::post('/submit-become-teacher', [BecomeController::class, 'submitBecomeATeacher'])->name('SubmitBecomeATeacher');

    //Become a coach
    Route::get('/become-a-coach', [BecomeController::class, 'becomeACoach'])->name('becomeACoach');
    Route::post('/submit-become-coach', [BecomeController::class, 'submitBecomeACoach'])->name('submitBecomeACoach');

    // Event
    Route::resource('/event', MemberEventController::class)->only([
        'create', 'store',
    ]);

    // announcements
    Route::get('/announcements', [DashboardController::class, 'getAnnouncements'])->name('announcements');
});
