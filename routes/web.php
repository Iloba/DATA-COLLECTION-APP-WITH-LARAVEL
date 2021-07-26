<?php

use App\Http\Controllers\UpdateEssay;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateBiodata;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateDocuments;
use App\Http\Controllers\UpdateEducation;
use App\Http\Controllers\UpdateExperience;
use App\Http\Controllers\EmailVerification;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

//Register Route
Route::view('/register', 'pages.register')->name('register_page')->middleware('isLogged');

//Login Route
Route::view('/login', 'pages.login')->name('login_page')->middleware('isLogged');

//Register User
Route::post('register', [UserController::class, 'register'])->name('register');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('access');

//Logout User
Route::post('/logout', [LoginController::class, 'logout'])->name('logout_user');

//verify mail route
Route::view('/verifymail', 'pages.verify_email')->name('email-verification');

//Verify EMail
Route::any('/verifymail/{user:id}', [EmailVerification::class, 'verifyEmail'])->name('verify_email');

//Login Users
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => 'dasboard', 'middleware' => 'access'], function(){
    //Edit Biodata
    Route::get('/updateBiodata/{user:username}', [UpdateBiodata::class, 'getdata'])->name('update_biodata');

    //Update Biodata
    Route::post('/updateBiodata/{user:id}', [UpdateBiodata::class, 'update'])->name('savebiodata');

    //Edit Education
    Route::get('/updateEducation/{user:username}', [UpdateEducation::class, 'getdata'])->name('update_education');

    //Update Education
    Route::post('/updateEducation/{user:id}', [UpdateEducation::class, 'update'])->name('save_education');

    //Delete Education
    Route::delete('/updateEducation/{id}/delete', [UpdateEducation::class, 'delete'])->name('delete_education');

    //Edit Experience
    Route::get('/updateExperience/{user:username}', [UpdateExperience::class, 'getdata'])->name('update_experience');

    //Update Experience
    Route::post('/updateExperience/{user:id}', [UpdateExperience::class, 'update'])->name('save_experience');

    //Delete Experience
    Route::delete('/updateExperience/{id}/delete', [UpdateExperience::class, 'delete'])->name('delete_experience');

    //Edit Documents
    Route::get('/updateDocuments/{user:username}', [UpdateDocuments::class, 'getdata'])->name('update_document');

    //Update Documents
    Route::post('/updateDocuments/{user:id}', [UpdateDocuments::class, 'update'])->name('save_document');

    //Delete Document
    Route::delete('/updateDocuments/{id}/delete', [UpdateDocuments::class, 'delete'])->name('delete_document');

    //Edit Essay
    Route::get('/updateEssay/{user:id}', [UpdateEssay::class, 'getdata'])->name('update_essay');

    //Edit Essay
    Route::post('/updateEssay/{user:id}', [UpdateEssay::class, 'update'])->name('save_essay');
});