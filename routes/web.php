<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
