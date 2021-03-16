<?php

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

// フロント
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');

// 管理画面
Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [\App\Http\Controllers\Back\DashboardController::class, 'index'])->name('dashboard');
});
