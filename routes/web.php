<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function(){

    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts',[PostController::class, 'index'])->name('posts');

// Route::get('/posts', function () {
//     return view('posts.index');
// });
