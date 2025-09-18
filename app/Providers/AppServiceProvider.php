<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Keycloak\KeycloakExtendSocialite;

class AppServiceProvider extends ServiceProvider
{
   protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // TAMBAHKAN BLOK INI
        SocialiteWasCalled::class => [
            KeycloakExtendSocialite::class.'@handle',
        ],
    ];

    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    
}
