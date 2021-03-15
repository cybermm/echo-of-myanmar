<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;

Auth::routes();

// Public UserRoute
Route::get('/', function () {
 return view('index');
});

// Language Controller
Route::get('/{locale}', [LocaleController::class, 'setLocale'])->name('locale');


// Admin Route Group
Route::group(
  [
    'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'role',
    'as' => 'admin.'
  ], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  });