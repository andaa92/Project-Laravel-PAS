<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MataPelajaranController;

/**
 * Home/dashboard
 */
Route::get('/', function () {
    return view('index');
})->name('dashboard');

/**
 * --------------------
 * RUTE UNTUK USER
 * --------------------
 */
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

/**
 * --------------------
 * RUTE UNTUK GURU
 * --------------------
 */
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

/**
 * --------------------
 * RUTE UNTUK MURID
 * --------------------
 */
Route::get('/murid', [MuridController::class, 'index'])->name('murid.index');
Route::get('/murid/create', [MuridController::class, 'create'])->name('murid.create');
Route::post('/murid', [MuridController::class, 'store'])->name('murid.store');
Route::get('/murid/{murid}/edit', [MuridController::class, 'edit'])->name('murid.edit');
Route::put('/murid/{murid}', [MuridController::class, 'update'])->name('murid.update');
Route::delete('/murid/{murid}', [MuridController::class, 'destroy'])->name('murid.destroy');

/**
 * --------------------
 * RUTE UNTUK MATA PELAJARAN
 * --------------------
 */
Route::get('/mata-pelajaran', [MataPelajaranController::class, 'index'])->name('mata-pelajaran.index');
Route::get('/mata-pelajaran/create', [MataPelajaranController::class, 'create'])->name('mata-pelajaran.create');
Route::post('/mata-pelajaran', [MataPelajaranController::class, 'store'])->name('mata-pelajaran.store');
Route::get('/mata-pelajaran/{mata_pelajaran}/edit', [MataPelajaranController::class, 'edit'])->name('mata-pelajaran.edit');
Route::put('/mata-pelajaran/{mata_pelajaran}', [MataPelajaranController::class, 'update'])->name('mata-pelajaran.update');
Route::delete('/mata-pelajaran/{mata_pelajaran}', [MataPelajaranController::class, 'destroy'])->name('mata-pelajaran.destroy');

/**
 * --------------------
 * RUTE UNTUK NILAI
 * --------------------
 */
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::get('/nilai/{nilai}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/{nilai}', [NilaiController::class, 'update'])->name('nilai.update');
Route::delete('/nilai/{nilai}', [NilaiController::class, 'destroy'])->name('nilai.destroy');
