<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');


Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::middleware("auth")->group(function (){
    Route::get('/logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
    Route::post('/posts/commnent/{id}', [\App\Http\Controllers\PostController::class,'comment'])->name('comment');

});

Route::middleware("guest")->group(function (){
    Route::get('/register', [\App\Http\Controllers\AuthController::class,'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class,'register'])->name('register_process');

    Route::get('/login', [\App\Http\Controllers\AuthController::class,'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class,'login'])->name('login_process');
});







/*Route::middleware("r")->group(function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

    Route::post('/contact_form', [\App\Http\Controllers\IndexController::class, 'index'])->name('contact_form');
});

Route::middleware("news")->middleware("r")->group(function () {
    Route::post('{id}', [\App\Http\Controllers\IndexController::class, 'index'])->name('contact_form');
});*/

