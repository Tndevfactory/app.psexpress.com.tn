<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\LoginController;


// auth api zone ------------------------------------------------------------

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth:api')->name('logout');
Route::get('/users', [LoginController::class, 'users'])->middleware('auth:api')->name('users');


// cart api zone ------------------------------------------------------------
Route::get('/check-cart-count', [CartController::class, "checkCartCount"])->name('check-cart-count');
Route::get('/add-to-cart', [CartController::class, "addToCart"])->name('add-to-cart');

// category api zone 
Route::get('/category', [CategoryController::class, "categoryFilter"])->name('category');


