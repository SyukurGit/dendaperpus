<?php

// file: routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Ini akan kita buat selanjutnya

// Rute Halaman Awal
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk memulai proses login
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->name('login');

// Rute yang akan dituju Keycloak setelah login berhasil
Route::get('/auth/callback', [AuthController::class, 'callback']);

// Grup rute yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});