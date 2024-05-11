<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function () {
    //! This Route is for DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
