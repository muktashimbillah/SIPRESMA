<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepage\beranda;
use App\Http\Controllers\homepage\login;
use App\Http\Controllers\homepage\register;
use App\Http\Controllers\admin\beranda as dashboard;
use App\Http\Controllers\admin\mahasiswa;


Route::get('/', function () {
    // return view('welcome');
    return redirect('/homepage');
});

Route::get('homepage', [beranda::class, 'index'])->name('homepage');

// Routes for guests (not logged in)
Route::middleware('guest')->group(function () {
    Route::get('login', [login::class, 'index'])->name('login');
    Route::post('login', [login::class, 'actionlogin'])->name('actionlogin');
    Route::get('login/lupasandi', [login::class, 'lupasandi'])->name('password.request');
    Route::get('register', [register::class, 'index'])->name('register');
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [dashboard::class, 'index'])->name('dashboard');

    Route::get('mahasiswa', [mahasiswa::class, 'list'])->name('mahasiswa.list');
    Route::get('mahasiswa-edit', [mahasiswa::class, 'list'])->name('mahasiswa.edit');
    Route::post('mahasiswa-delete', [mahasiswa::class, 'list'])->name('mahasiswa.delete');
    Route::get('mahasiswa-create', [mahasiswa::class, 'create'])->name('mahasiswa.create');
    Route::post('mahasiswa-create', [mahasiswa::class, 'list'])->name('mahasiswa.create');

    Route::post('logout', [Login::class, 'logout'])->name('logout');
});
