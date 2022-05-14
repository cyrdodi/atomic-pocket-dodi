<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DompetController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DompetStatusController;

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

Route::get('/master/dompet', [DompetController::class, 'index'])->name('masterDompet');
Route::get('/master/dompet/create', [DompetController::class, 'create'])->name('masterDompetCreate');
Route::post('/master/dompet/create', [DompetController::class, 'store']);
Route::get('/master/dompet/{dompet}/edit', [DompetController::class, 'edit'])->name('masterDompetEdit');
Route::post('/master/dompet/{dompet}/edit', [DompetController::class, 'update']);
Route::get('/master/dompet/{dompet}', [DompetController::class, 'show'])->name('masterDompetShow');

Route::post('/master/dompet/update', [DompetStatusController::class, 'update'])->name('masterDompetStatusUpdate');

Route::get('/master/kategori', [KategoriController::class, 'index'])->name('masterKategori');
