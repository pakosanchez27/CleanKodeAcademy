<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:30',
            'apellido' => 'required|max:100', // Aquí está la línea correcta para 'apellido'
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'fechaNacimiento' => 'required|date',
            // 'checkboxes' => 'required|array',
            // 'checkboxes.*' => 'in:on', // Cada checkbox debe tener un valor "on" (marcado)
        ]);

        // Cargar a la base de datos

        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->username),
            'apellido' => $request->apellido,
            'fecha_nacimiento' => $request->fechaNacimiento,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'idRol' => 3,
        ]);
        // Otra forma de autenticar 
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('posts.index');
    }
}
