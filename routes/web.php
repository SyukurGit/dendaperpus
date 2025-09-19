<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Rute Halaman Awal
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Grup rute yang hanya bisa diakses setelah login
// Middleware 'auth' sekarang akan otomatis menggunakan guard 'keycloak'
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk logout. Kita akan arahkan ke rute logout bawaan library.
    Route::post('/logout', function () {
        return redirect(route('keycloak.logout'));
    })->name('logout');
});