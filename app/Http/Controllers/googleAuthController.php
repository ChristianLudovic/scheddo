<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class googleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        
        // Créez ou mettez à jour l'utilisateur dans votre base de données
        $authUser = User::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'image' => $user->avatar,
            'password' => bcrypt('password'),
        ]);
        
        // Générez un token Sanctum
        $token = $authUser->createToken('google-token')->plainTextToken;
        
        // Retournez le token ou redirigez l'utilisateur
        return redirect()->to('/review-and-confirm')->with('token', $token);
    }
}
