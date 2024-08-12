<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* Route::get('/employee/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('/employee/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/employee/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm']);
Route::post('/employee/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']); */

Auth::routes(/* ['login' => false, 'register' => false] */);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
