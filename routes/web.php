<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostController;
// Public Routes
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\PublicPostController;
// Viewers
use App\Http\Controllers\ViewerController;

Auth::routes();

// Public UserRoute
Route::group([], function () {
    Route::get('/', [IndexController::class, 'index']);

    Route::get('/posts', [PublicPostController::class, 'index'])->name('posts.index');
    
    Route::get('/update-views', [ViewerController::class, 'update'])->name('views.update');
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
        Route::get('/profile/{profile}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

        // Post Manager

        Route::resource('/post', PostController::class);

    });