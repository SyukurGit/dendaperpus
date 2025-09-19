<?php

namespace App\Providers;

// Hapus 'use' untuk SocialiteWasCalled dan KeycloakProvider
use Illuminate\Support\ServiceProvider;

// Ganti EventServiceProvider menjadi ServiceProvider biasa
class AppServiceProvider extends ServiceProvider
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
        // KOSONGKAN BAGIAN INI DARI KODE EVENT LISTENER
    }
}