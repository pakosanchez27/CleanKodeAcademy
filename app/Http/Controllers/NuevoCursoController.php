<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categoria;
use Illuminate\Http\Request;

class NuevoCursoController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        
        return view('CodeMasters.newCurso', compact('categorias'));
    }

    public function store(Request $request)
    {

        dd($request->all());

        $request->validate([
            'nombreCurso' => 'required|string|max:255',
            'descripcionCurso' => 'required|string',
            'FotoCurso' => 'required|string|max:255',
            'videoIntro' => 'required|string|max:255',
            'idCategoria' => 'required|exists:categorias,idCategoria',
        ]);

        
        // $curso = new Curso();
        // $curso->nombreCurso = $request->nombreCurso;
        // $curso->descripcionCurso = $request->descripcionCurso;
        // $curso->FotoCurso = $request->FotoCurso;
        // $curso->videoIntro = $request->videoIntro;
        // $curso->idCategoria = $request->idCategoria;
        // $curso->save();

    }

}
