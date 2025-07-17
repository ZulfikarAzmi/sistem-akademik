<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Mahasiswa Routes
Route::prefix('dashboard/mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/add', [MahasiswaController::class, 'create']);
    Route::post('/add', [MahasiswaController::class, 'store']);
    Route::get('/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/dosen/add', [DosenController::class, 'create'])->name('dosen.create');
    Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
});


// Prodi Routes
Route::get('/dashboard/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/dashboard/prodi/add', [ProdiController::class, 'create'])->name('prodi.create');
Route::post('/dashboard/prodi', [ProdiController::class, 'store'])->name('prodi.store');
Route::get('/dashboard/prodi/{id}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('/dashboard/prodi/{id}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/dashboard/prodi/{id}', [ProdiController::class, 'destroy'])->name('prodi.destroy');


Route::prefix('dashboard')->group(function () {
    Route::get('/mata-kuliah', [MataKuliahController::class, 'index'])->name('mata-kuliah.index');
    Route::get('/mata-kuliah/add', [MataKuliahController::class, 'create'])->name('mata-kuliah.create');
    Route::post('/mata-kuliah', [MataKuliahController::class, 'store'])->name('mata-kuliah.store');
});


require __DIR__.'/auth.php';
