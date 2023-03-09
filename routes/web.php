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
Route::resource('/employer_dashboard', 'App\Http\Controllers\EmployerDashboardController');
Route::resource('/employer_ads', 'App\Http\Controllers\EmployerManageAdsController');
Route::resource('/employer-candidates', 'App\Http\Controllers\EmployerCandidateController');
Route::resource('/employer-job', 'App\Http\Controllers\EmployerJobListController');
Route::resource('/employer-job-post', 'App\Http\Controllers\EmployerJobController');
Route::resource('/employer_profile', 'App\Http\Controllers\EmployerProfileController');
Route::resource('/sas-dashboard', 'App\Http\Controllers\SasDashboardController');
Route::resource('/coordinator_profile', 'App\Http\Controllers\CoordinatorProfileController');
Route::resource('/coordinator_active_class', 'App\Http\Controllers\CoordinatorActiveClassController');
Route::resource('/coordinator_assessment', 'App\Http\Controllers\CoordinatorAssessmentController');
Route::resource('/coordinator_section_quest', 'App\Http\Controllers\CoordinatorSectionQuestionController');
Route::resource('/coordinator_assign', 'App\Http\Controllers\CoordinatorAssignAssessmentController');
Route::resource('/intern_profile', 'App\Http\Controllers\StudentProfileController');
Route::resource('/coordinator_dashboard', 'App\Http\Controllers\CoordinatorDashboardController');
Route::resource('/intern_dashboard', 'App\Http\Controllers\StudentDashboardController');
Route::resource('/intern_class', 'App\Http\Controllers\StudentClassController');
Route::resource('/sas_coordinator', 'App\Http\Controllers\SasCoordinatorController');
Route::resource('/sas_employer', 'App\Http\Controllers\SasEmployerController');
Route::resource('/update_status', 'App\Http\Controllers\UpdateStatusController');
Route::resource('/manage_class', 'App\Http\Controllers\ManageClassController');
Route::resource('/coordinator_single_class', 'App\Http\Controllers\CoordinatorSingleClassController');
Route::resource('/logout', 'App\Http\Controllers\LogoutController');
