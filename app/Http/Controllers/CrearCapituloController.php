<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Capitulos;
use Illuminate\Http\Request;

class CrearCapituloController extends Controller
{
    public function store(Request $request)
    {
        $idCurso = $request->input('idCurso');
        $nombreCapitulo = $request->capitulo;

        $curso = Curso::find($idCurso);

        Capitulos::create([
            'nombreCapitulo' => $nombreCapitulo,
            'idCurso' => $idCurso
        ]);

        return redirect()->route('clases.index', compact('idCurso'));

    }

    public function update(Request $request, $idCapitulo)
    {
        $capitulo = Capitulos::find($idCapitulo);
     
        $this->validate($request, [
            'capitulo' => 'required|max:255',
        ]);
    
        $capitulo->nombreCapitulo = $request->capitulo; // Utiliza la propiedad del modelo para actualizar el nombre del capítulo
    
        $capitulo->save();
        
        return redirect()->route('clases.index', ['idCurso' => $capitulo->idCurso]);
    }
    
    
}
