<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\WisataController;
Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});
//DATA WISATA//
Route::get('/manajemen-wisata',  [WisataController::class, 'index'])->name('manajemen-wisata');
Route::get('/add-wisata', [WisataController::class, 'add']);
Route::post('/wisata-store', [WisataController::class, 'store'])->name('wisata-store');
Route::get('/delete-wisata/{id}', [WisataController::class, 'delete']);
//KATEGORI WISATA//
Route::get('/manajemen-kategori-wisata',  [KategoriController::class, 'index'])->name('manajemen-kategori-wisata');
Route::get('/add-kategori-wisata', [KategoriController::class, 'add']);
Route::get('/delete-kategori-wisata/{id}', [KategoriController::class, 'delete']);
Route::get('/edit-kategori-wisata/{id}', [KategoriController::class, 'edit']);
Route::post('/kategori-store', [KategoriController::class, 'store'])->name('kategori-store');
Route::post('/kategori-update/{id}', [KategoriController::class, 'update'])->name('kategori-update');
//FASILITAS WISATA
Route::get('/manajemen-fasilitas-wisata',  [FasilitasController::class, 'index'])->name('manajemen-fasilitas-wisata');
Route::get('/add-fasilitas-wisata', [FasilitasController::class, 'add']);
Route::post('/fasilitas-store', [FasilitasController::class, 'store'])->name('fasilitas-store');
Route::get('/delete-fasilitas-wisata/{id}', [FasilitasController::class, 'delete']);
Route::get('/edit-fasilitas-wisata/{id}', [FasilitasController::class, 'edit']);
Route::post('/fasilitas-update/{id}', [FasilitasController::class, 'update'])->name('fasilitas-update');