<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\AdminController;


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
Route::get('/product', [ProductController::class, 'manage_product'])->name('products.manage-product');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('/product', [ProductController::class, 'store'])->name('products.store')->middleware('auth');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/product/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

//Route::post('/product/{product}/comments', [CommentController::class, 'store'])->name('products.comments.store')->middleware('auth');

/* user route */
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');

Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');

/* Profile route */
Route::get('/profile/{user}', [UserController::class, 'profile'])->name('profile')->middleware('auth');

/* follow route */
Route::post('/users/{user}/follow', [FollowerController::class, 'follow'])->middleware('auth')->name('users.follow');

Route::post('/users/{user}/unfollow', [FollowerController::class, 'unfollow'])->middleware('auth')->name('users.unfollow');

/* feed route */
Route::get('/feed', FeedController::class)->middleware('auth')->name('feed');

/* Admin route */
Route::get('/admin', [AdminController::class, 'index'])->name('admin.show');
