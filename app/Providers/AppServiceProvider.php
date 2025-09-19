<?php

namespace App\Providers;

// Hapus semua 'use' yang tidak perlu terkait Socialite
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider // Pastikan extends ServiceProvider biasa
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Kosongkan metode ini dari listener Socialite
    }
}