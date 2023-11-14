<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categorias;
use Illuminate\Http\Request;


class NuevoCursoController extends Controller
{
    public function index()
    {
        $categorias = Categorias::all();

        return view('CodeMasters.newCurso', compact('categorias'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombreCurso' => 'required|max:30',
            'descripcionCurso' => 'required|string|min:1',
            'FotoCurso' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'videoIntro' => 'required|mimes:mp4,avi,mov,wmv',
            'idCategoria' => 'required|exists:categorias,idCategoria', // Corregir la validación
        ]);

        $descripcionCurso = $request->input('descripcionCurso');

        // Almacenar archivos en la carpeta correspondiente (puedes utilizar el método generateUniqueFileName que proporcioné anteriormente)
        $fotoCursoName = $this->generateUniqueFileName($request->file('FotoCurso'));
        $videoIntroName = $this->generateUniqueFileName($request->file('videoIntro'));

        // Mueve los archivos a la carpeta adecuada en el sistema de archivos
        $request->file('FotoCurso')->storeAs('images', $fotoCursoName);
        $request->file('videoIntro')->storeAs('videos', $videoIntroName);


        Curso::create([
            'nombreCurso' => $request->nombreCurso,
            'descripcionCurso' => $request->descripcionCurso,
            'FotoCurso' => $fotoCursoName,
            'videoIntro' => $videoIntroName,
            'idCategoria' => $request->idCategoria,
        ]);


        return redirect()->route('Master.index')->with('success', 'Curso creado correctamente');
    }

    private function generateUniqueFileName($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $hashName = hash('sha256', $originalName . microtime()) . '.' . $extension;

        return $hashName;
    }
}
