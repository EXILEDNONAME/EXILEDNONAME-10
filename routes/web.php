<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/templates', function () {
    return view('layouts.backend.default');
});

// DASHBOARD
Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('dashboard/file-manager', [App\Http\Controllers\Backend\DashboardController::class, 'file_manager'])->name('dashboard.file-manager');
Route::get('dashboard/language/{language}', [App\Http\Controllers\Backend\DashboardController::class, 'language'])->name('dashboard.language');
Route::get('dashboard/logout', [App\Http\Controllers\Backend\DashboardController::class, 'logout'])->name('dashboard.logout');
