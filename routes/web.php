<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
Route::get('/users/list', [UsersController::class, 'index'])->middleware('auth');
Route::get('/hello', [HelloWorldController::class, 'show']);
Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
