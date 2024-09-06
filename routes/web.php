<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sample\IndexController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialAuthController;

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

// ホームページ
Route::get('/', function () {
    return view('welcome');
});

// ダッシュボード（認証が必要）
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Google認証を開始するルート
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');

// Google認証後のコールバックルート
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

// 認証が必要なルートのグループ
Route::middleware('auth')->group(function () {
    Route::get('/sample', IndexController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
