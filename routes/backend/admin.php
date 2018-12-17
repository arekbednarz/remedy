<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SpecialistController;
/*
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('profile', [SpecialistController::class, 'index'])->name('profile');
