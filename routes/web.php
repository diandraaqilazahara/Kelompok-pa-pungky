<?php

use App\Http\Controllers\jns_KendaraanController;
use App\Http\Controllers\Kendaraan;
use App\Http\Controllers\Pemilik;
use App\Models\detail_service;
use App\Models\jns_service;
use App\Models\mekanik;
use App\Models\service;
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

//route detail_service
Route::get('/detail_service', [detail_service::class, 'index'])->name('detail_service.index');
Route::get('/detail_service/add', [detail_service::class, 'create'])->name('detail_service.create');
Route::post('/detail_service/add', [detail_service::class, 'store'])->name('detail_service.store');
Route::get('/detail_service/edit/{id_detail_service}', [detail_service::class, 'edit'])->name('detail_service.edit');
Route::post('/detail_service/update/{id_detail_service}', [detail_service::class, 'update'])->name('detail_service.update');
Route::get('/derail_service/delete/{id_detail_service}', [detail_service::class, 'destroy'])->name('detail_service.delete');

//route mekanik
Route::get('/mekanik', [mekanik::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/add', [mekanik::class, 'create'])->name('mekanik.create');
Route::post('/mekanik/add', [mekanik::class, 'store'])->name('mekanik.store');
Route::get('/mekanik/edit/{id_mekanik}', [mekanik::class, 'edit'])->name('mekanik.edit');
Route::post('/mekanik/update/{id_mekanik}', [mekanik::class, 'update'])->name('mekanik.update');
Route::get('/mekanik/delete/{id_mekanik}', [mekanik::class, 'destroy'])->name('mekanik.delete');

//route jns_service
Route::get('/jns_service', [jns_service::class, 'index'])->name('jns_service.index');
Route::get('/jns_service/add', [jns_service::class, 'create'])->name('jns_service.create');
Route::post('/jns_service/add', [jns_service::class, 'store'])->name('jns_service.store');
Route::get('/jns_service/edit/{id_jns_service}', [jns_service::class, 'edit'])->name('jns_service.edit');
Route::post('/jns_service/update/{id_jns_service}', [jns_service::class, 'update'])->name('jns_service.update');
Route::get('/jns_service/delete/{id_jns_service}', [jns_service::class, 'destroy'])->name('jns_service.delete');

//route service
Route::get('/service', [service::class, 'index'])->name('seervice.index');
Route::get('/service/add', [service::class, 'create'])->name('service.create');
Route::post('/service/add', [service::class, 'store'])->name('service.store');
Route::get('/service/edit/{id_service}', [service::class, 'edit'])->name('service.edit');
Route::post('/service/update/{id_service}', [service::class, 'update'])->name('service.update');
Route::get('/service/delete/{id_pemilik}', [service::class, 'destroy'])->name('service.delete');

