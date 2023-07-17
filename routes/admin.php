<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin')->group(function(){

Route::middleware(['guest:admin'])->group(function () {
    Route::view('/login', 'back.pages.admin.auth.login')->name('login');
    Route::post('/login_handler', [AdminController::class,'loginHandler'])->name('login_handler');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::view('/home', 'back.pages.admin.home')->name('home');
        });
});



