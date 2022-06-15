<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebcamController;
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

Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('pns');

Auth::routes();













// Route get
Route::get('/home', [HomeController::class, 'pns'])->name('home');
Route::get('/tabel',[HomeController::class, 'tabel'])->name('tabel');
Route::get('/absen',[HomeController::class, 'absen']);
Route::get('/absensi',[HomeController::class, 'absensi'])->name('absensi');
Route::get('online-user', [UserController::class, 'pns']);
Route::get('pns', [HomeController::class, 'pns'])->middleware(['checkRole:pns,admin']);
// Route Post
Route::post('/header/surat', [HomeController::class, 'surat']);
Route::post('/absensi/masuk', [HomeController::class, 'absenmasuk']);
Route::post('/absensi/{absen}/keluar', [HomeController::class, 'absenkeluar']);


// Route Admin
Route::get('/datakaryawan', [HomeController::class, 'datakaryawan'])->name('datakaryawan');
Route::get('/edit', [HomeController::class, 'edit'])->name('edit');
Route::get('/presentasiAbsen', [HomeController::class, 'presentasiAbsen','hitungpresentasi'])->name('presentasiAbsen');
Route::get('/admin', [HomeController::class, 'admin'])->middleware('checkRole:admin')->name('admin');
Route::get('/action/data/{id}', [HomeController::class, 'datauser']);
Route::get('/action/delete/{id}', [HomeController::class, 'destroy']);
Route::get('/action/edit/{id}', [HomeController::class, 'edit']);
Route::post('/tambahuser', [HomeController::class, 'tambahuser']);
Route::post('/presentasiabsen', [HomeController::class, 'presentasiAbsen',]);

// Route Kabid
Route::get('kabid', [HomeController::class, 'kabid'])->middleware(['checkRole:kabid,admin']);

Route::get('/hitungabsensi', [HomeController::class,'hitungpresentasi']);
