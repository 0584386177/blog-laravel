<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TimerController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\CheckUserLogin;
use Illuminate\Support\Facades\Route;

// ROUTES ADMIN

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('check.true.login');
    Route::get('categories', [CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('categories/show', [CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit'); //view
    Route::post('categories/edit/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::get('categories/add', [CategoryController::class, 'add'])->name('admin.categories.add'); //view
    Route::post('categories/add', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/delete{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
});

Route::prefix('auth')->group(function () {
    Route::get('register', [RegisterController::class, 'registerForm'])->name('auth.register.form');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.register');
    Route::get('login', [LoginController::class, 'loginForm'])->name('auth.login.form')->middleware('check.false.login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');
    Route::get('logout', [LogoutController::class, 'logout'])->name('auth.logout');
});

// MAIL
Route::get('active/{token}', [RegisterController::class, 'activation'])->name('active.email');
