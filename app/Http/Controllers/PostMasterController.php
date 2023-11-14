<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class PostMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $resultados = Curso::all();
       
        return view('CodeMasters.dashboard', ['resultados' => $resultados]);
        return view('CodeMasters.dashboard');
    }

    public function MostrarCursos()
    {
        $resultados = Curso::all();
        dd($resultados);
        return view('CodeMasters.dashboard', ['resultados' => $resultados]);
    }
}
