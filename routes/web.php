<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/', 'App\Http\Controllers\IndexController');
Route::resource('/register', 'App\Http\Controllers\RegisterController');
Route::resource('/signin', 'App\Http\Controllers\SigninController');
Route::resource('/employer-dashboard', 'App\Http\Controllers\EmployerDashboardController');
Route::resource('/employer-candidates', 'App\Http\Controllers\EmployerCandidateController');
Route::resource('/employer-job', 'App\Http\Controllers\EmployerJobListController');
Route::resource('/employer-job-post', 'App\Http\Controllers\EmployerJobController');
Route::resource('/sas-dashboard', 'App\Http\Controllers\SasDashboardController');
Route::resource('/coordinator_profile', 'App\Http\Controllers\CoordinatorProfileController');
Route::resource('/sas_coordinator', 'App\Http\Controllers\SasCoordinatorController');
Route::resource('/update_status', 'App\Http\Controllers\UpdateStatusController');
Route::resource('/logout', 'App\Http\Controllers\LogoutController');
