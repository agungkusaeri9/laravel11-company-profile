<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PesanMasukController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login_process'])->name('login.process');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('users', UserController::class)->except('show');
    Route::resource('testimoni', TestimoniController::class)->except('show');
    Route::resource('pesan-masuk', PesanMasukController::class)->only(['index', 'destroy']);
    Route::resource('galeri', GaleriController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::resource('layanan', LayananController::class);
    Route::resource('portofolio', PortofolioController::class);
    Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
    Route::patch('pengaturan', [PengaturanController::class, 'update'])->name('pengaturan.update');
});
