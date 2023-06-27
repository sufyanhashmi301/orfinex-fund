<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('/how-it-works', 'how-it-works')->name('how-it-works');
Route::view('/help-center', 'help-center')->name('help-center');
Route::view('/faq', 'faq')->name('faq');
Route::view('/success-coach', 'success-coach')->name('success-coach');

Route::prefix('trading')->group(function () {
    Route::view('/blog', 'trading.blog')->name('trading.blog');
    Route::view('/videos', 'trading.videos')->name('trading.videos');
    Route::view('/affiliate', 'trading.affiliate')->name('trading.affiliate');
    Route::view('/calendar', 'trading.calendar')->name('trading.calendar');
});

Route::prefix('company')->group(function () {
    Route::view('/about', 'company.about')->name('company.about');
    Route::view('/contact', 'company.contact')->name('company.contact');
    Route::view('/careers', 'company.careers')->name('company.careers');
});