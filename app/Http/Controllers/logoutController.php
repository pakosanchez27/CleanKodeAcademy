<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Puedes redirigir a donde quieras después del cierre de sesión.
    }
}
