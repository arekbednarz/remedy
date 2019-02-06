<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\SpecialistController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\FavouriteController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => [/*'auth', 'password_expires'*/]], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', [AccountController::class, 'index'])->name('dashboard');
        Route::get('profile', [AccountController::class, 'profile'])->name('profile');
        Route::post('profile/store', [AccountController::class, 'storeProfile'])->name('profile.store');

        Route::get('favourites', [AccountController::class, 'favourites'])->name('favourites');
        Route::get('favourites/{id}/add', [FavouriteController::class, 'add'])->name('favourites.add');
        Route::get('favourites/{id}/remove', [FavouriteController::class, 'remove'])->name('favourites.remove');

        Route::get('messages', [AccountController::class, 'messages'])->name('messages');


        Route::get('specialist', [SpecialistController::class, 'index'])->name('specialist.index');
        Route::get('specialist/{id}', [SpecialistController::class, 'show'])->name('specialist.show');


    });

    Route::group(['namespace' => 'Rating', 'as' => 'rating.'], function () {
        Route::get('review/ajax_pagination/{specialist_id}',[RatingController::class, 'indexAjax'])->name('ajax.pagination');

        Route::get('review/create/{specialist_id}', [RatingController::class, 'create'])->name('create');
        Route::post('review/store', [RatingController::class, 'store'])->name('store');
    });
});
