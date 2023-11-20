<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $usuario = Auth::user();
        $id = $usuario->id;
        $resultados = Curso::where('idUser', $id)->get();
       

       
        return view('CodeMasters.dashboard', ['resultados' =>$resultados, 'idUser' => $id ] , compact('id'));
        
    }

    public function MostrarCursos()
    {
        $resultados = Curso::all();
        dd($resultados);
        return view('CodeMasters.dashboard', ['resultados' => $resultados]);
    }
}
