<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('customers', CustomerController::class);
Route::resource('services', ServiceController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
