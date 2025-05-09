<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MataPelajaranController;

Route::get('/', function () {
    return view('welcome');
});
Route:: get('/', function () {
    return view('index');
});
Route::resource('users', UserController::class)->names('users');
Route::resource('guru', GuruController::class)->names('guru');
Route::resource('murid', MuridController::class)->names('murid');
Route::resource('mata-pelajaran', MataPelajaranController::class)->names('mata-pelajaran');
Route::resource('nilai', NilaiController::class)->names('nilai');
