<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ProfileController;

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
    'prefix' => 'admin',
    'middleware' => 'role',
    'as' => 'admin.'
  ], function () {

    // Admin Home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Role Management
    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/role/{id}/{role}', [RoleController::class, 'update'])->name('role.update');
    
    //  Profile Management
    Route::get('/profile/{profile}',[ProfileController::class,'edit'])->name('profile.edit');
    Route::post('/profile/{profile}',[ProfileController::class,'update'])->name('profile.update');

  });