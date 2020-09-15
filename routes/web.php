<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
});

Auth::routes();


