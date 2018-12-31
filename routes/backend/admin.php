<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SpecialistController;
use App\Http\Controllers\FileController;
/*
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('profile', [SpecialistController::class, 'index'])->name('profile');
Route::post('upload_file', [FileController::class, 'upload'])->name('upload_file');
Route::post('remove_file', [FileController::class, 'remove'])->name('remove_file');
