<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // return view('backend.pages.index');
    return view('frontend.pages.index');
});

Auth::routes();

Route::get('/frontend/authentication', function () {
    // return view('welcome');
    // return view('backend.pages.index');
    return view('frontend.pages.auth.authentication');
})->name('frontend.authentication');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
