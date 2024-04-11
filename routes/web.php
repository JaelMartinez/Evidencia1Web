<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/home', function () {
    return view('home');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/search', function () {
    return view('search');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
