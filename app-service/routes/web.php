<?php

use App\Http\Controllers\jns_KendaraanController;
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
});

Route::get('/jns_Kendaraan', [jns_KendaraanController::class, 'index'])->name('jns_Kendaraan.index');
Route::get('/jns_Kendaraan/add', [jns_KendaraanController::class, 'create'])->name('jns_Kendaraan.create');
Route::get('/jns_Kendaraan/add', [jns_KendaraanController::class, 'store'])->name('jns_Kendaraan.store');