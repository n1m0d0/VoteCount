<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PageController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('page.dashboard');

    Route::get('user', 'user')->name('page.user');
});
