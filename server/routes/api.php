<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PaymentMethodController;

Route::post('payment-methods', [PaymentMethodController::class, 'create']);
Route::get('payment-methods', [PaymentMethodController::class, 'getAll']);
Route::get('payment-methods/{id}', [PaymentMethodController::class, 'getById']);
Route::put('payment-methods/{id}', [PaymentMethodController::class, 'update']);
Route::delete('payment-methods/{id}', [PaymentMethodController::class, 'delete']);

Route::post('statuses', [StatusController::class, 'create']);
Route::get('statuses', [StatusController::class, 'getAll']);
Route::get('statuses/{id}', [StatusController::class, 'getById']);
Route::put('statuses/{id}', [StatusController::class, 'update']);
Route::delete('statuses/{id}', [StatusController::class, 'delete']);

Route::post('forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('send-otp', [AuthController::class, 'sendOtp']);
Route::post('verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('resend-otp', [AuthController::class, 'resendOtp']);

Route::post('roles', [RoleController::class, 'create']);
Route::get('roles', [RoleController::class, 'getAll']);
Route::get('roles/{id}', [RoleController::class, 'getById']);
Route::put('roles/{id}', [RoleController::class, 'update']);
Route::delete('roles/{id}', [RoleController::class, 'delete']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products', [ProductController::class, 'store']);
    Route::get('products/{id}', [ProductController::class, 'show']);
    Route::patch('products/{id}', [ProductController::class, 'update']);
    Route::delete('products/{id}', [ProductController::class, 'destroy']);

    Route::get('bookings', [BookingController::class, 'getAllBookings']);
    Route::get('bookings/{id}', [BookingController::class, 'getBookingById']);
    Route::get('booking-active', [BookingController::class, 'getActiveBookings']);
    Route::get('/bookings/status/{statusId}', [BookingController::class, 'getBookingsByStatus']);
    Route::post('bookings', [BookingController::class, 'createFromUser']);
    Route::patch('bookings/{id}/accept', [BookingController::class, 'acceptBooking']);
    Route::post('bookings/{id}/upload-payment', [BookingController::class, 'uploadPaymentProof']);
    Route::patch('bookings/{id}/verify-payment', [BookingController::class, 'verifyPayment']);
});

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('admin/products', [ProductController::class, 'adminIndex']);
});
