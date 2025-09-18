<?php

// file: app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('keycloak')->redirect();
    }

    public function callback()
    {
        $keycloakUser = Socialite::driver('keycloak')->user();

        $user = User::updateOrCreate(
            [
                'email' => $keycloakUser->getEmail(),
            ],
            [
                'name' => $keycloakUser->getName(),
                'keycloak_id' => $keycloakUser->getId(),
                'password' => bcrypt(Str::random(16)) // Password acak karena tidak dipakai
            ]
        );

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $redirectUri = route('home');
        $keycloakLogoutUrl = Socialite::driver('keycloak')->getLogoutUrl($redirectUri);

        return redirect($keycloakLogoutUrl);
    }
}