<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/login',[AuthController::Class,'show'])->name('login');
// Route::post('/login',[AuthController::Class,'login'])->name('login.submit');

Route::get('/dashboard', function(){
    return "Welcome Harshil!";
})->middleware('auth');



Route::get('users/create', [ HomeController::class, 'create' ]);
Route::post('users/create', [ HomeController::class, 'store' ])->name('users.store');
