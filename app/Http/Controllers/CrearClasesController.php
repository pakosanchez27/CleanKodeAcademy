<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CrearClasesController extends Controller
{
    public function index(Request $request)
    {
        $idCurso = $request->input('idCurso');
        $nombreCurso = Curso::find($idCurso)->nombreCurso;
        return view('CodeMasters.clases', compact('nombreCurso', 'idCurso'));
    }
}
