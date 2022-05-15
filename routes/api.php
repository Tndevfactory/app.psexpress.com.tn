<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ProductController;


// auth api zone ------------------------------------------------------------

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/update-verify-at', [LoginController::class, "updateVerifyAt"]);
Route::get('/verify-resend', [LoginController::class, "resendToken"]);
Route::get('/logout', [LoginController::class, "logout"]);

Route::post('/send-mail-reset-password', [LoginController::class, "sendPasswordResetPassword"]);
Route::post('/update-password', [LoginController::class, "updatePassword"]);

Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->middleware(['xauthapi']);
Route::get('/users', [LoginController::class, 'users'])->middleware(['xauthapi']);


// cart api zone ------------------------------------------------------------
Route::get('/check-cart-count', [CartController::class, "checkCartCount"]);
Route::get('/add-to-cart', [CartController::class, "addToCart"]);
Route::get('/delete-all-cart', [CartController::class, "deleteAllCart"]);
Route::get('/delete-item-cart', [CartController::class, "deleteItemCart"]);
Route::get('/update-qty-item-cart', [CartController::class, "updateQtyItemCart"]);



// admin  zone 
Route::post('/admin-login', [AdminController::class, "adminLogin"]);
Route::get('/admin-logout', [AdminController::class, "adminLogout"]);

// admin  stock  zone 
Route::get('/api-all-stocks', [ProductController::class, "apiAllStocks"]);
Route::post('/api-create-stock', [ProductController::class, "apiCreateStock"]);

// admin  substock  zone 
Route::get('/api-all-substocks', [ProductController::class, "apiAllSubstocks"]);
Route::post('/api-create-substock', [ProductController::class, "apiCreateSubstock"]);

// admin product  zone 
Route::get('/api-all-products', [ProductController::class, "apiAllProducts"]);
Route::post('/api-create-product', [ProductController::class, "apiCreateProduct"]);
Route::put('/api-update-product', [ProductController::class, "apiUpdateProduct"]);
Route::delete('/api-delete-product', [ProductController::class, "apiDeleteProduct"]);
Route::get('/api-search-product', [ProductController::class, "apiSearchProduct"]);


