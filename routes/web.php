<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\ProgramDonasiController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\KategoriProgamController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [AuthController::class, 'login'])->name("login")->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::get('/donasi', function () {
    return view('donasi');
});

Route::get('/home', [AuthController::class, 'home'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');
Route::get('/verifikasi', [AuthController::class, 'verifikasi'])->middleware('guest');
Route::post('/verifikasi', [AuthController::class, 'postverifikasi'])->middleware('guest');

Route::get('/validasi', [AuthController::class, 'indexvalidasi'])->middleware('auth');
Route::post('/validasi', [AuthController::class, 'validasi'])->middleware('auth');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login')->middleware('guest');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/profil', [HomeController::class, 'profil'])->middleware('auth');

Route::get('/lupapassword', [ResetPasswordController::class, 'indexforgotpass'])->middleware('guest');
Route::post('/lupapassword', [ResetPasswordController::class, 'forgotpass'])->middleware('guest');

Route::get('/resetpassword/{token}', [ResetPasswordController::class, 'indexresetpass'])->name('reset.password.get')->middleware('guest');
Route::post('/resetpassword', [ResetPasswordController::class, 'resetpass'])->middleware('guest');

Route::get('/ubahpassword', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/ubahpassword', [ChangePasswordController::class, 'store'])->middleware('auth');

Route::get('/programdonasi/{slug}', [ProgramDonasiController::class, 'index'])->middleware('auth');
Route::get('/donasiDoNation', [ProgramDonasiController::class, 'all'])->middleware('auth');


Route::get('/listprogram', function () {
    return view('user.listprogram');
});
Route::get('/detailprogram', function () {
    return view('user.detailprogram');
});
Route::get('/payment', function () {
    return view('user.payment');
});

///////////////////////////ADMIN//////////////////////////////
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('admin');
Route::get('/dashboard/user', [AdminController::class, 'indexuser'])->middleware('admin');

Route::get('/dashboard/kategoriprogram', [KategoriProgamController::class, 'index'])->middleware('admin');
Route::get('/dashboard/createkategori', [KategoriProgamController::class, 'indexcreate'])->middleware('admin');
Route::post('/dashboard/createkategori', [KategoriProgamController::class, 'store'])->middleware('admin');
Route::get('/dashboard/hapuskategori', [KategoriProgamController::class, 'destroy'])->middleware('admin');
Route::get('/dashboard/updatekategori/{slug}', [KategoriProgamController::class, 'indexupdate'])->name('updatekategori')->middleware('admin');
Route::post('/dashboard/updatekategori', [KategoriProgamController::class, 'update'])->middleware('admin');
Route::get('/dashboard/daftarprogram/{slug}', [KategoriProgamController::class, 'listprogram'])->name('programkategori')->middleware('admin');
Route::get('/createslugkategori', [KategoriProgamController::class, 'checkSlug'])->middleware('admin');

Route::get('/dashboard/program', [ProgramController::class, 'index'])->middleware('admin');
Route::get('/dashboard/createprogram', [ProgramController::class, 'indexcreate'])->middleware('admin');
Route::post('/dashboard/createprogram', [ProgramController::class, 'store'])->middleware('admin');

Route::get('/dashboard/allprogram', [ProgramController::class, 'allprogram'])->middleware('admin');
Route::get('/dashboard/pendingprogram', [ProgramController::class, 'pendingprogram'])->middleware('admin');
Route::get('/dashboard/doneprogram', [ProgramController::class, 'doneprogram'])->middleware('admin');


