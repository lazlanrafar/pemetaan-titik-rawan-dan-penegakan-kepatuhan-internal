<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\DataKerawananController;
use App\Http\Controllers\PengawasanPelaksanaanTugasController;
use App\Http\Controllers\PendampinganPemeriksaanFisik;
use App\Http\Controllers\PemantauanKegiatanInternal;
use App\Http\Controllers\PemantauanKegiatanInternalDetail;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/', DashboardController::class)->middleware('auth');

Route::resource('/data-kerawanan', DataKerawananController::class)->middleware('auth');
Route::resource('/pengawasan-pelaksanaan-tugas', PengawasanPelaksanaanTugasController::class)->middleware('auth');
Route::resource('/pendampingan-pemeriksaan-fisik', PendampinganPemeriksaanFisik::class)->middleware('auth');

Route::resource('/pemantauan-kegiatan-internal', PemantauanKegiatanInternal::class)->middleware('auth');
Route::put('/pemantauan-kegiatan-internal-hadir/{id}', [PemantauanKegiatanInternalDetail::class, 'setHadir'])->middleware('auth');
Route::put('/pemantauan-kegiatan-internal-detail/{id}', [PemantauanKegiatanInternalDetail::class, 'updateDetail'])->middleware('auth');

Route::resource('/pegawai', PegawaiController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
