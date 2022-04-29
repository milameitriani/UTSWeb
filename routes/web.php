<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\DatabarangController;
use App\Http\Controllers\DataPeminjamanController;
use App\Http\Controllers\DataPengembalianController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PendataanPetaniController;
use App\Models\PendataanPetani;

use App\Models\Panen;
Route::resource('panen',PanenController::class);
Route::get('/addPanen', [Panencontroller::class, 'create']);
Route::post('/addpanen/store',[PanenController::class, 'store']);

Route::resource('PendataanPetani',PendataanPetaniController::class);
Route::get('/inputpetani', [PendataanPetanicontroller::class, 'create']);
Route::post('/inputpetani/store',[PendataanPetaniController::class, 'store']);
Route::post('/inputpetani/update',[PendataanPetaniController::class, 'update']);
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
Route::get('/info', [InfoController::class, 'index']);
Route::get('/datapenduduk', [DatapendudukController::class, 'index']);
Route::get('/databarang', [DatabarangController::class, 'index'])->name('databarang');
Route::get('/databarang/detail/{id_barang}', [DatabarangController::class, 'detail']);
Route::get('/databarang/add', [DatabarangController::class, 'add']);
Route::post('/databarang/insert', [DatabarangController::class, 'insert']);
Route::get('/databarang/edit/{id_barang}', [DatabarangController::class, 'edit']);
Route::post('/databarang/update/{id_barang}', [DatabarangController::class, 'update']);
Route::get('/databarang/delete/{id_barang}', [DatabarangController::class, 'delete']);
Route::get('/datapeminjaman', [DataPeminjamanController::class, 'index']);
Route::get('/datapengembalian', [DataPengembalianController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');