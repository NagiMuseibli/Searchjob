<?php

use App\Http\Controllers\Back\AdminCandidateController;
use App\Http\Controllers\Back\AdminCompanyController;
use App\Http\Controllers\Back\AdminCompanyPostController;
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

    // Admin Candidate
    Route::group(['middleware' => 'role:candidate'], function () {
        Route::prefix('candidate')->group(function () {
            Route::get('/',             [AdminCandidateController::class, 'index'])->name('candidate');
        });
    });


    // Admin Company
    Route::group(['middleware' => 'role:company'], function () {
        Route::prefix('company')->group(function () {
            Route::get('/',              [AdminCompanyController::class, 'index'])->name('company');
            Route::get('/post-job',      [AdminCompanyPostController::class, 'index'])->name('post_job_view');
            Route::post('/post-job',      [AdminCompanyPostController::class, 'create'])->name('create_job');
        });
    });


    Route::get('/logout',             [LoginController::class, 'logout'])->name('logout');
});

// If user don't login
Route::group(['middleware' => 'IsLogin'], function () {
    Route::view('login', 'view.login')->name('login');
    Route::view('register-candidate', 'view.register-candidate')->name('register-candidate');
    Route::view('register-company', 'view.register-company')->name('register-company');
    Route::post('login',              [LoginController::class, 'login'])->name('login.submit');
    Route::post('register-candidate', [RegisterController::class, 'register_candidate'])->name('candidate-register');
    Route::post('register-company',   [RegisterController::class, 'register_company'])->name('company-register');
});

Route::get('/',                       [HomeController::class, 'index'])->name('home');
Route::get('/vacancies',              [VacancyController::class, 'index'])->name('vacancies');
Route::post('/vacancies',             [VacancyController::class, 'search'])->name('search_vacancy');
Route::get('/companies',              [CompanyController::class, 'index'])->name('companies');
Route::get('/company{id}',            [CompanyController::class, 'show'])->name('single_company');
Route::get('/resume{id}',             [ResumeController::class, 'show'])->name('single_resume');
Route::get('/resumes',                [ResumeController::class, 'index'])->name('resumes');
//Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/vacancy{id}',            [HomeController::class, 'show_vacancy'])->name('vacancy_show');
