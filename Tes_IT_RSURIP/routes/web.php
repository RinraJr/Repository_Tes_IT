<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanWebController;

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



Route::get('/karyawanWeb', [KaryawanWebController::class, 'index'])->name('karyawan.index');
Route::get('/karyawanWeb/create', [KaryawanWebController::class, 'create'])->name('karyawan.create');
Route::post('/karyawanWeb', [KaryawanWebController::class, 'store'])->name('karyawan.store');
Route::get('/karyawanWeb/{id}/edit', [KaryawanWebController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawanWeb/{id}', [KaryawanWebController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawanWeb/{id}', [KaryawanWebController::class, 'destroy'])->name('karyawan.destroy');
