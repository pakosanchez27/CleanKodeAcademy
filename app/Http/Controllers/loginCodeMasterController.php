<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginCodeMasterController extends Controller
{
    public function index()
    {
        return view('auth/login-codemaster');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        $user = auth()->user();

        if ($user->idRol == 3) {
            Auth::logout();
            return back()->with('mensaje', 'Eres un Cleankoder. Haz clic en el enlace de abajo');
            
        } else {
            return redirect()->route('Master.index');
        }
    }
}
