<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\SpecialistController;
use App\Http\Controllers\Frontend\RatingController;

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
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', [AccountController::class, 'index'])->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        /*
         * Specialist
         */
        Route::get('specialist', [SpecialistController::class, 'index'])->name('specialist.index');
        Route::get('specialist/{id}', [SpecialistController::class, 'show'])->name('specialist.show');


    });

    Route::group(['namespace' => 'Rating', 'as' => 'rating.'], function () {
        Route::get('review/ajax_pagination/{specialist_id}',[RatingController::class, 'indexAjax'])->name('ajax.pagination');

        Route::get('review/create/{specialist_id}', [RatingController::class, 'create'])->name('create');
        Route::post('review/store', [RatingController::class, 'store'])->name('store');
    });
});
