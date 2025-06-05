<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NotificationController;

Route::post('/pagos/preferencia', [PaymentController::class, 'createPreference'])->name('payment.preference');
Route::get('/pagos/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/pagos/failure', [PaymentController::class, 'paymentFailure'])->name('payment.failure');
Route::get('/pagos/pending', [PaymentController::class, 'paymentPending'])->name('payment.pending');

Route::post('/notificaciones/email', [NotificationController::class, 'sendCustomEmail'])->name('notification.email');
