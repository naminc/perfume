<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController; // Add this line
use App\Http\Controllers\PerfumeController; // Add this line
use App\Http\Controllers\ProductController; // Add this line
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Define profile route with middleware and check the method name
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile')->middleware('auth');

Route::get('/san-pham/{code}', [ProductController::class, 'index'])->name('products.index');


// Group routes for guests (only accessible when not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'login']);
    Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/auth/register', [AuthController::class, 'register']);
});
