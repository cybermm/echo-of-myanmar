<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  app()->setLocale('mmr');
  return view('index');
});

Auth::routes();

// Admin Route
Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware'=>'role'], function () {

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});