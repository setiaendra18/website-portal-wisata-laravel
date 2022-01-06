<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

Route::get('/',  [HomeController::class, 'index'])->name('home');
Route::get('/kategori/{id}', [HomeController::class, 'kategori'])->name('kategori-search');
Route::get('/event',  [HomeController::class, 'event'])->name('event');

//DATA WISATA//
Route::get('adm/manajemen-wisata',  [WisataController::class, 'index'])->name('manajemen-wisata');
Route::get('adm/add-wisata', [WisataController::class, 'add'])->name('add-wisata');
Route::get('adm/edit-wisata', [WisataController::class, 'add'])->name('edit-wisata');
Route::get('adm/detail-wisata', [WisataController::class, 'add'])->name('detail-wisata');
Route::post('adm/wisata-store', [WisataController::class, 'store'])->name('wisata-store');
Route::get('adm/delete-wisata/{id}', [WisataController::class, 'delete'])->name('delete-wisata');
//KATEGORI WISATA//
Route::get('adm/manajemen-kategori-wisata',  [KategoriController::class, 'index'])->name('manajemen-kategori-wisata');
Route::get('adm/add-kategori-wisata', [KategoriController::class, 'add'])->name('add-kategori-wisata');
Route::get('adm/delete-kategori-wisata/{id}', [KategoriController::class, 'delete'])->name('del-kategori-wisata');
Route::get('adm/edit-kategori-wisata/{id}', [KategoriController::class, 'edit'])->name('edit-kategori-wisata');
Route::post('adm/kategori-store', [KategoriController::class, 'store'])->name('kategori-store');
Route::post('adm/kategori-update/{id}', [KategoriController::class, 'update'])->name('kategori-update');
//FASILITAS WISATA
Route::get('adm/manajemen-fasilitas-wisata',  [FasilitasController::class, 'index'])->name('manajemen-fasilitas-wisata');
Route::get('adm/add-fasilitas-wisata', [FasilitasController::class, 'add'])->name('add-fasilitas-wisata');
Route::post('adm/fasilitas-store', [FasilitasController::class, 'store'])->name('fasilitas-store');
Route::get('adm/delete-fasilitas-wisata/{id}', [FasilitasController::class, 'delete'])->name('del-fasilitas-wisata');
Route::get('adm/edit-fasilitas-wisata/{id}', [FasilitasController::class, 'edit'])->name('edit-fasilitas-wisata');
Route::post('adm/fasilitas-update/{id}', [FasilitasController::class, 'update'])->name('fasilitas-update');
//EVENT ROUTE//
Route::get('adm/manajemen-event',  [EventController::class, 'index'])->name('manajemen-event');
Route::get('adm/add-event-wisata', [EventController::class, 'add'])->name('add-event-wisata');
Route::post('adm/event-store', [EventController::class, 'store'])->name('event-store');
Route::get('adm/delete-event-wisata/{id}', [EventController::class, 'delete'])->name('del-event-wisata');
Route::get('adm/edit-event-wisata/{id}', [EventController::class, 'edit'])->name('edit-event-wisata');
Route::post('adm/event-update/{id}', [EventController::class, 'update'])->name('event-update');