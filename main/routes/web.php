<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main');

/* auth route */
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* product route */
Route::get('/product/{product}', [PostController::class, 'show'])->name('products.show');

Route::post('/product', [PostController::class, 'store'])->name('products.store')->middleware('auth');

Route::get('/product/{product}/edit', [PostController::class, 'edit'])->name('products.edit');

Route::put('/product/{product}', [PostController::class, 'update'])->name('products.update');

Route::delete('/product/{product}', [PostController::class, 'destroy'])->name('products.destroy');

Route::post('/product/{product}/comments', [CommentController::class, 'store'])->name('products.comments.store')->middleware('auth');
