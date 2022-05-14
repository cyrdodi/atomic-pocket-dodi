<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DompetController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DompetMasukController;
use App\Http\Controllers\DompetStatusController;
use App\Http\Controllers\KategoriStatusController;

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
  return view('home');
});

Route::get('/master/dompet', [DompetController::class, 'index'])->name('master.dompet');
Route::get('/master/dompet/create', [DompetController::class, 'create'])->name('master.dompet_create');
Route::post('/master/dompet/create', [DompetController::class, 'store']);
Route::get('/master/dompet/{dompet}/edit', [DompetController::class, 'edit'])->name('master.dompet_edit');
Route::post('/master/dompet/{dompet}/edit', [DompetController::class, 'update']);
Route::get('/master/dompet/{dompet}', [DompetController::class, 'show'])->name('master.dompet_show');

Route::post('/master/dompet/update', [DompetStatusController::class, 'update'])->name('master.dompet_status_update');

Route::get('/master/kategori', [KategoriController::class, 'index'])->name('master.kategori');
Route::get('/master/kategori/create', [KategoriController::class, 'create'])->name('master.kategori_create');
Route::post('/master/kategori/create', [KategoriController::class, 'store']);
Route::get('/master/kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('master.kategori_edit');
Route::post('/master/kategori/{kategori}/edit', [KategoriController::class, 'update']);
Route::get('/master/kategori/{kategori}', [KategoriController::class, 'show'])->name('master.kategori_show');

Route::post('/master/kategori/update', [KategoriStatusController::class, 'update'])->name('master.kategori_status_update');

Route::get('/transaksi/dompet-masuk', [DompetMasukController::class, 'index'])->name('transaksi.dompet_masuk');
Route::get('/transaksi/dompet-masuk/create', [DompetMasukController::class, 'create'])->name('transaksi.dompet_masuk_create');
Route::post('/transaksi/dompet-masuk/create', [DompetMasukController::class, 'store']);
