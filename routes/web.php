<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\PenjualanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[LoginController::class, 'login'])->name('login');
Route::post('/auth',[LoginController::class, 'auth'])->name('auth');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


// register
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/register/auth', [LoginController::class, 'auth_regis'])->name('auth_regis');

Route::resource('produk',ProdukController::class);
Route::resource('penjualan', PenjualanController::class); // ROUTE CRUD PENJUALAN
Route::resource('pelanggan', pelangganController::class);
Route::Resource('detail', DetailController::class);
