<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ReportController;

Route::get('/download-sales-report', [ReportController::class, 'downloadSalesReport'])->name('download.sales.report');
Route::get('/download-active-orders-report', [ReportController::class, 'downloadActiveOrdersReport'])->name('download.active.orders.report');

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
Route::post('login-admin', [AuthController::class, 'loginAdmin']);
Route::post('send-otp', [AuthController::class, 'sendOtp']);
Route::post('verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('resend-otp', [AuthController::class, 'resendOtp']);

Route::post('roles', [RoleController::class, 'create']);
Route::get('roles', [RoleController::class, 'getAll']);
Route::get('roles/{id}', [RoleController::class, 'getById']);
Route::put('roles/{id}', [RoleController::class, 'update']);
Route::delete('roles/{id}', [RoleController::class, 'delete']);

Route::get('/products-noLog', [ProductController::class, 'getindexWithoutLogin']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/profile', [AuthController::class, 'getProfile']);
    Route::post('/profile/update', [AuthController::class, 'updateProfile']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{id}', [ProductController::class, 'show']);
    Route::get('/sales-data', [BookingController::class, 'getSalesData']);
    Route::get('/orders-this-month', [BookingController::class, 'getBookingsThisMonth']);
    Route::post('update-product/{id}', [ProductController::class,  'updateProduct']);
    Route::post('products', [ProductController::class, 'store']);
    Route::delete('products/{id}', [ProductController::class, 'destroy']);
    
    Route::get('bookings', [BookingController::class, 'getBookings']);
    Route::get('bookings/{id}', [BookingController::class, 'getBookingById']);
    Route::get('booking-active', [BookingController::class, 'getActiveBookings']);
    Route::get('booking-count', [BookingController::class, 'getBookingCounts']);
    Route::get('my-order', [BookingController::class, 'getMyOrder']);
    Route::patch('bookings/{id}/accept', [BookingController::class, 'acceptBooking']);
    Route::post('bookings', [BookingController::class, 'createFromUser']);
    Route::post('bookings/{id}/upload-payment', [BookingController::class, 'uploadPaymentProof']);
    Route::post('bookings/{id}/verify-payment', [BookingController::class, 'verifyPayment']);
});