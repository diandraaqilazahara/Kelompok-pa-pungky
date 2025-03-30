<?php

use App\Http\Controllers\jns_KendaraanController;
use App\Http\Controllers\Kendaraan;
use App\Http\Controllers\Pemilik;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('template');
})->name('home');

//route jns_kendaraan
Route::get('/jns_Kendaraan', [jns_KendaraanController::class, 'index'])->name('jns_Kendaraan.index');
Route::get('/jns_Kendaraan/add', [jns_KendaraanController::class, 'create'])->name('jns_Kendaraan.create');
Route::post('/jns_Kendaraan/add', [jns_KendaraanController::class, 'store'])->name('jns_Kendaraan.store');
Route::get('/jns_Kendaraan/edit/{id_jns_kendaraan}', [jns_KendaraanController::class, 'edit'])->name('jns_Kendaraan.edit');
Route::post('/jns_Kendaraan/update/{id_jns_kendaraan}', [jns_KendaraanController::class, 'update'])->name('jns_Kendaraan.update');
Route::get('/jns_Kendaraan/delete/{id_jns_kendaraan}', [jns_KendaraanController::class, 'destroy'])->name('jns_Kendaraan.delete');

//route kendaraan
Route::get('/Kendaraan', [Kendaraan::class, 'index'])->name('Kendaraan.index');
Route::get('/Kendaraan/add', [Kendaraan::class, 'create'])->name('Kendaraan.create');
Route::post('/Kendaraan/add', [Kendaraan::class, 'store'])->name('Kendaraan.store');
Route::get('/Kendaraan/edit/{id_kendaraan}', [Kendaraan::class, 'edit'])->name('Kendaraan.edit');
Route::post('/Kendaraan/update/{id_kendaraan}', [Kendaraan::class, 'update'])->name('Kendaraan.update');
Route::get('/Kendaraan/delete/{id_kendaraan}', [Kendaraan::class, 'destroy'])->name('Kendaraan.delete');

//route pemilik
Route::get('/Pemilik', [Pemilik::class, 'index'])->name('Pemilik.index');
Route::get('/Pemilik/add', [Pemilik::class, 'create'])->name('Pemilik.create');
Route::post('/Pemilik/add', [Pemilik::class, 'store'])->name('Pemilik.store');
Route::get('/Pemilik/edit/{id_pemilik}', [Pemilik::class, 'edit'])->name('Pemilik.edit');
Route::post('/Pemilik/update/{id_pemilik}', [Pemilik::class, 'update'])->name('Pemilik.update');
Route::get('/Pemilik/delete/{id_pemilik}', [Pemilik::class, 'destroy'])->name('Pemilik.delete');
