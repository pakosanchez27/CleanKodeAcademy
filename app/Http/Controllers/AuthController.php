<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;     
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // Verificar si el usuario ya existe en la base de datos
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // El usuario ya existe, puedes realizar acciones adicionales si es necesario
            // Por ejemplo, puedes iniciar sesión para el usuario existente
            // auth()->login($existingUser);

            // Redirigir o realizar cualquier acción necesaria
            return redirect()->route('posts.index');
        }

        // El usuario no existe, así que lo creamos
        User::create([
            'name' => $user->user['given_name'],
            'apellido' => $user->user['family_name'],
            'email' => $user->email,
            'fotoPerfil' => $user->avatar,
        ]);
        
        // Puedes realizar acciones adicionales después de crear el usuario si es necesario
        // Por ejemplo, puedes iniciar sesión para el usuario recién creado
     
        auth()->login($existingUser);
        // Redirigir o realizar cualquier acción necesaria
        return redirect()->route('posts.index');
    }
}
