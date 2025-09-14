<?php

use App\Http\Controllers\Frontend\Subscription\SubscriptionCheckoutController;
use App\Http\Controllers\Frontend\Subscription\SubscriptionPaymentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Subscription checkout
    // Route::get('/subscription/checkout', [SubscriptionCheckoutController::class, 'index'])->name('subscription.checkout.index');
    // Route::post('/subscription/checkout', [SubscriptionCheckoutController::class, 'store'])->name('subscription.checkout.store');

    // Subscription Payment
    // Route::post('/subscription/pay', [SubscriptionPaymentController::class, 'pay'])->name('subscription.pay');
    // Route::get('/subscription/pay/approval', [SubscriptionPaymentController::class, 'approval'])->name('subscription.pay.approval');
    // Route::get('/subscription/pay/cancelled', [SubscriptionPaymentController::class, 'cancelled'])->name('subscription.pay.cancelled');

    //coupon
    // Route::post('/subscription/coupon/validate', [SubscriptionCheckoutController::class, 'validateCoupon'])
    //     ->name('subscription.coupon.validate');
});
