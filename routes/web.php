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

// ADMINISTRATIVE - SETTINGS
Route::get('/dashboard/administratives/applications/settings', [App\Http\Controllers\Backend\__System\Administrative\Application\SettingController::class, 'index'])->name('dashboard.administrative.application.setting.index');
Route::patch('/dashboard/administratives/applications/settings/update/{id}', [App\Http\Controllers\Backend\__System\Administrative\Application\SettingController::class, 'update'])->name('dashboard.administrative.application.setting.update');

Route::get('/dashboard/administratives/applications/optimizations', [App\Http\Controllers\Backend\__System\Administrative\Application\OptimizationController::class, 'index'])->name('dashboard.administrative.application.optimization.index');
Route::patch('/dashboard/administratives/applications/optimizations/update', [App\Http\Controllers\Backend\__System\Administrative\Application\OptimizationController::class, 'update'])->name('dashboard.administrative.application.optimization.update');
// Route::get('/dashboard/administratives/applications/optimizations', function () {
//     $text = \Artisan::call('optimize:clear');
//     return redirect('/a')->with('success', __('default.notification.success.optimized'));
// });

// DATATABLES - GENERALS
Route::group([
  'as' => 'dashboard.application.datatable.',
  'prefix' => 'dashboard/applications/datatables/generals',
  'namespace' => 'App\Http\Controllers\Backend\__Application\Datatable',
  'middleware' => 'auth',
], function () {
  Route::get('active/{id}', 'GeneralController@active')->name('active');
  Route::get('activities', 'GeneralController@activity')->name('activity');
  Route::get('delete/{id}', 'GeneralController@delete')->name('delete');
  Route::get('delete-permanent/{id}', 'GeneralController@delete_permanent')->name('delete-permanent');
  Route::get('inactive/{id}', 'GeneralController@inactive')->name('inactive');
  Route::get('selected-active', 'GeneralController@selected_active')->name('selected-active');
  Route::get('selected-inactive', 'GeneralController@selected_inactive')->name('selected-inactive');
  Route::get('selected-delete', 'GeneralController@selected_delete')->name('selected-delete');
  Route::get('selected-delete-permanent', 'GeneralController@selected_delete_permanent')->name('selected-delete-permanent');
  Route::get('restore/{id}', 'GeneralController@restore')->name('restore');
  Route::get('selected-restore', 'GeneralController@selected_restore')->name('selected-restore');
  Route::get('trash', 'GeneralController@trash')->name('trash');
  Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
});
