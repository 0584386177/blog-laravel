<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimerController;
use Illuminate\Support\Facades\Route;

// ROUTES ADMIN

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin-index');
});