<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::view('/register', 'pages.register')->name('register_page');

//Login Route
Route::view('/login', 'pages.login')->name('login_page');

//Register User
Route::post('register', [UserController::class, 'register'])->name('register');

//Dashboard
Route::view('/dashboard', 'auth.dashboard')->name('dashboard');

//Login Users
Route::post('/login', [UserController::class, 'login'])->name('login');