<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard.home');
});

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'dashboard.index')->name('dashboard.home');
    Route::view('low-score', 'dashboard.low-score')->name('dashboard.low-score');
    Route::view('score', 'dashboard.score')->name('dashboard.score');
    Route::view('overview-scores', 'dashboard.overview-scores')->name('dashboard.overview-scores');
    Route::view('score-detail', 'dashboard.score-detail')->name('dashboard.score-detail');
    Route::view('budget', 'dashboard.budget')->name('dashboard.budget');
    Route::view('overview-orders', 'dashboard.overview-orders')->name('dashboard.overview-orders');
    Route::view('order-detail', 'dashboard.order-detail')->name('dashboard.order-detail');
    Route::view('favorites', 'dashboard.favorites')->name('dashboard.favorites');
    Route::view('profile', 'dashboard.profile')->name('dashboard.profile');
    Route::view('profile/edit', 'dashboard.profile-edit')->name('dashboard.profile-edit');
    Route::view('profile/email', 'dashboard.profile-email-edit')->name('dashboard.profile-email-edit');
    Route::view('profile/password', 'dashboard.profile-password-edit')->name('dashboard.profile-password-edit');
    Route::view('reauthenticate', 'dashboard.reauthenticate')->name('dashboard.reauthenticate');
});

Route::prefix('profile')->group(function () {
    Route::view('register', 'profile.register')->name('profile.register');
    Route::view('login', 'profile.login')->name('profile.login');
    Route::view('request', 'profile.request')->name('profile.request');
    Route::view('requested', 'profile.requested')->name('profile.requested');
    Route::view('reset', 'profile.reset')->name('profile.reset');
    Route::view('sso-complete', 'profile.sso-complete')->name('profile.sso-complete');
    Route::view('employee-invitation-landing', 'profile.employee-invitation-landing')->name('profile.employee-invitation-landing');
});
