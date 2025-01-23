<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::get('/', function () {
    // return view('welcome');
    // return view('backend.pages.index');
    return view('frontend.pages.index');
});

Auth::routes();

Route::group(array('prefix' => '/frontend'), function () {
    Route::get('/authentication', [FrontendController::class, 'index'])->name('frontend.authentication');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
