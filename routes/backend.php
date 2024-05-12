<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Settings\MailSettingController;
use App\Http\Controllers\Backend\Settings\ProfileController;
use App\Http\Controllers\Backend\Settings\SystemSettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin'])->group(function () {
    //! This Route is for DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //!Route for SystemSettingController
    // Route::controller(SystemSettingController::class)->group(function () {
    //     Route::get('/system-setting', 'index')->name('system.setting');
    //     Route::post('/system-setting', 'update')->name('system.update');
    //     Route::get('/system/mail', 'mailSetting')->name('mailsetting');
    //     Route::post('/system/mail', 'mailSettingUpdate')->name('mail.setting.update');
    //     Route::get('/system/profile', 'profileindex')->name('profilesetting');
    //     Route::get('/system/stripe', 'stripeindex')->name('stripe.index');
    //     Route::post('/system/stripe', 'stripestore')->name('stripe.store');
    // });

    //!Route for ProfileController
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.setting');
    Route::post('/update-profile', [ProfileController::class, 'UpdateProfile'])->name('update.profile');
    Route::post('/update-profile-password', [ProfileController::class, 'UpdatePassword'])->name('update.Password');

    //!Route for SystemSettingController
    Route::get('/system-setting', [SystemSettingController::class, 'index'])->name('system.index');
    Route::post('/system-setting', [SystemSettingController::class, 'update'])->name('system.update');

    //!Route for MailSettingController
    Route::get('/mail-setting', [MailSettingController::class, 'index'])->name('mail.setting');
    Route::post('/mail-setting', [MailSettingController::class, 'update'])->name('mail.update');
});
