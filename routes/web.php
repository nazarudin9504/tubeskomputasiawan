<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// kalau buka "/", arahkan ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// dashboard hanya bisa diakses setelah login & email verified
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// semua route user hanya bisa diakses user yang sudah login
Route::middleware('auth')->group(function () {

    // daftar user + jumlah akun
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // form tambah user
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

    // simpan user baru
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    // form edit user
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

    // update user
    Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');

    // hapus user
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

// kalau pakai Breeze/Jetstream
require __DIR__.'/auth.php';
