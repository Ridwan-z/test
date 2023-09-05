<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/barang', [BarangController::class, 'barang'])->middleware(['auth'])->name('barang');
Route::get('/barang/tambah', [BarangController::class, 'tambah'])->middleware(['auth']);
Route::post('/barang/aksiTambah', [BarangController::class, 'TambahData'])->middleware(['auth']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->middleware(['auth']);
Route::post('/barang/aksiEdit/{id}', [BarangController::class, 'editData'])->middleware(['auth']);
Route::get('/barang/hapus/{id}', [BarangController::class, 'hapusData'])->middleware(['auth']);
require __DIR__.'/auth.php';
