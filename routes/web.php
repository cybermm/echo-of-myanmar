<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  app()->setLocale('mmr');
    return view('index');
});
Route::get('/news', function () {
    return view('user.news');
});
Route::get('/gallery', function () {
    return view('user.gallery');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
