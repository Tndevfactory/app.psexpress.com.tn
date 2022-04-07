<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\LoginController;


// auth api zone ------------------------------------------------------------

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/update-verify-at', [LoginController::class, "updateVerifyAt"])->name('update-verify-at');
Route::get('/verify-resend', [LoginController::class, "resendToken"])->name('verify-resend');

Route::post('/send-mail-reset-password', [LoginController::class, "sendPasswordResetPassword"])->name('send-mail-reset-password');
Route::post('/update-password', [LoginController::class, "updatePassword"])->name('update-password');

Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->middleware(['xauthapi'])->name('logout');
Route::get('/users', [LoginController::class, 'users'])->middleware(['xauthapi'])->name('users');


// cart api zone ------------------------------------------------------------
Route::get('/check-cart-count', [CartController::class, "checkCartCount"])->name('check-cart-count');
Route::get('/add-to-cart', [CartController::class, "addToCart"])->name('add-to-cart');



// admin  zone 
Route::get('/test-admin', [AdminController::class, "testAdmin"])->name('test-admin');


