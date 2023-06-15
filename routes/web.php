<?php

use App\Http\Controllers\Back\AdminCandidateController;
use App\Http\Controllers\Back\AdminCompanyController;
use App\Http\Controllers\Back\LoginController;
use App\Http\Controllers\Back\RegisterController;
use App\Http\Controllers\Front\CompanyController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ResumeController;
use App\Http\Controllers\Front\VacancyController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

// If user login
Route::group(['middleware' => 'NotLogin'], function () {
    Route::get('/candidate', [AdminCandidateController::class, 'index'])->name('candidate');
    Route::get('/company', [AdminCompanyController::class, 'index'])->name('company');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// If user don't login
Route::group(['middleware' => 'IsLogin'], function () {
    Route::get('login', [LoginController::class, 'show'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::get('register-candidate', [RegisterController::class, 'show'])->name('register-candidate');
    Route::post('register-candidate', [RegisterController::class, 'register_candidate'])->name('candidate-register');
    Route::get('register-company', [RegisterController::class, 'showcompany'])->name('register-company');
    Route::post('register-company', [RegisterController::class, 'register_company'])->name('company-register');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::get('/company{id}', [CompanyController::class, 'show'])->name('single_company');
Route::get('/resume{id}', [ResumeController::class, 'show'])->name('single_resume');
Route::get('/resumes', [ResumeController::class, 'index'])->name('resumes');
//Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/vacancy{id}', [HomeController::class, 'show_vacancy'])->name('vacancy_show');
