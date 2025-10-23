<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coach\Profile\ProfileController;
use App\Http\Controllers\Coach\Coaching\CoachingController;
use App\Http\Controllers\Coach\Schedule\ScheduleController;
use App\Http\Controllers\Coach\Dashboard\DashboardController;
use App\Http\Controllers\Coach\Student\EnrollCoachController;

Route::prefix('itclanbd/coach')->as('coach.')->middleware(['auth'])->group(function () {

    // profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/pass/update/', [ProfileController::class, 'updatePassword'])->name('update.password');

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Coaching
    Route::get('my-coachings', [CoachingController::class, 'index'])->name('coachings');
    Route::get('my-coachings/join/{uuid}', [CoachingController::class, 'joinCoaching'])->name('coachings.join');
    Route::patch('/update-coaching-status/{enroll_coach}', [CoachingController::class, 'updateStatus'])->name('enroll_coach.status.update');

    // Schedule
    Route::prefix('schedule')->as('schedule.')->group(function () {
        Route::get('/', [ScheduleController::class, 'index'])->name('index');
        Route::get('/dashboard', [ScheduleController::class, 'dashboard'])->name('dashboard');
        Route::post('/info-store', [ScheduleController::class, 'infoStore'])->name('info.store');
        Route::post('/slot-store', [ScheduleController::class, 'slotStore'])->name('slot.store');
        Route::get('/day-available-status-change/{day}', [ScheduleController::class, 'dayAvailableStatusChange'])->name('dayAvailableStatusChange');
        Route::get('slot-view/{day}', [ScheduleController::class, 'slotView'])->name('slot.view');
        Route::delete('slot-delete/{id}', [ScheduleController::class, 'slotDelete'])->name('slot.delete');
    });

    // enrolled students
    Route::get('enrolled-students', [EnrollCoachController::class, 'index'])->name('enrolled-students');
});
