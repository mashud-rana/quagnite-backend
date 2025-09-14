<?php

use Illuminate\Support\Facades\Route;



Route::prefix('coach')->name('coach.')->group(function () {


    Route::middleware(['auth:sanctum'])->group(function () {

    });
});
