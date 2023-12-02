<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Capitulos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

    public function destroy($idCapitulo)
    {
        $capitulo = Capitulos::find($idCapitulo);
        $idCurso = $capitulo->idCurso;

        // Obtener todas las clases asociadas al capítulo
        $clases = $capitulo->clases;

        // Iterar sobre cada clase para eliminar los archivos y luego eliminar la clase
        foreach ($clases as $clase) {
            // Eliminar el archivo de video
            if ($clase->videoClase) {
                Storage::delete('public/videos/' . $clase->videoClase);
            }

            // Eliminar el archivo de recurso
            if ($clase->recursoClase) {
                Storage::delete('public/recursos/' . $clase->recursoClase);
            }

            // Eliminar la clase
            $clase->delete();
        }

        // Eliminar el capítulo
        $capitulo->delete();

        return redirect()->route('clases.index', ['idCurso' => $idCurso]);
    }


}
