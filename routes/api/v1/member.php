<?php

use Illuminate\Support\Facades\Route;




Route::prefix('member')->name('member.')->group(function () {



    // // Protected (sanctum + role + ability)
    // Route::middleware(['auth:sanctum', 'role:coach', 'abilities:coach:*'])->group(function () {
    Route::middleware(['auth:sanctum', 'user_type:member'])->group(function () {

    });
});
