<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Mahasiswa Routes
Route::prefix('dashboard/mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index']);
    Route::get('/add', [MahasiswaController::class, 'create']);
    Route::post('/add', [MahasiswaController::class, 'store']);
});


require __DIR__.'/auth.php';
