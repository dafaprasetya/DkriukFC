<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\Dkcontroller;
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


Route::get('/',[Dkcontroller::class, 'index'])->name('home');
Route::get('/home',[Dkcontroller::class, 'index']);
Route::get('/menu', [Dkcontroller::class, 'menu'])->name('menu');
Route::get('/cari', [Dkcontroller::class, 'cari'])->name('cari');

Route::post('gabung', [Dkcontroller::class, 'joint'])->name('jaoint');
Route::get('ujang',[Dkcontroller::class, 'ujang'])->name('ujang');

Route::get('/mitra/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/mitra/login', [LoginController::class, 'login']);
Route::get('test',[Dkcontroller::class, 'testrl']);
Route::get('profile',[Dkcontroller::class, 'profilec'])->name('profile');

// Detail menu
Route::group(['middleware' => ['auth']], function () {
    Route::get('/menu/{id}', [Dkcontroller::class, 'detailmenu'])->name('detailmenu');
    Route::post('/menu/order', [Dkcontroller::class, 'order'])->name('order');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

});
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// // Registration Routes...

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

