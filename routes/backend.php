<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

//! This Route is for DashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
