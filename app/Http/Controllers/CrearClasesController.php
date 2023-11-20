<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Capitulos;
use App\Models\Clases;
use Illuminate\Http\Request;

class CrearClasesController extends Controller
{
    public function index(Request $request)
    {
        $idCurso = $request->input('idCurso');
        $nombreCurso = Curso::find($idCurso)->nombreCurso;
        $capitulos = Capitulos::all();
        $clasesPorCapitulo = Clases::all()->groupBy('idCapitulo');

        return view('CodeMasters.clases', compact('nombreCurso', 'idCurso', 'capitulos', 'clasesPorCapitulo'));
    }

    public function store(Request $request)
    {
        $idCapitulo = $request->input('idCapitulo');
        $capitulo = Capitulos::find($idCapitulo);
        $idCurso = $capitulo->idCurso;

        $this->validate($request, [
            'nombreClase' => 'required|max:255',
            'duracionClase' => 'required|max:255',
            'descripcionClase' => 'required',
            'videoClase' => 'required|mimetypes:video/mp4,video/avi,video/quicktime,video/x-ms-wmv',
        ]);



        $videoClaseName = $this->generateUniqueFileName($request->file('videoClase'));
        $request->file('videoClase')->storeAs('public/videos', $videoClaseName);
        if ($request->file('recursoClase') != null) {
            $recursoName = $this->generateUniqueFileName($request->file('recursoClase'));
            $request->file('recursoClase')->storeAs('public/recursos', $recursoName);
        } else {
            $recursoName = null;
        }

        Clases::create([
            'nombreClase' => $request->nombreClase,
            'duracionClase' => $request->duracionClase,
            'descripcionClase' => $request->descripcionClase,
            'videoClase' => $videoClaseName,
            'recursoClase' => $recursoName,
            'idCapitulo' => $idCapitulo // O usar $request->idCapitulo si así lo prefieres
        ]);


        return redirect()->route('clases.index', ['idCurso' => $idCurso])->with('success', 'Clase creada correctamente');
    }



    private function generateUniqueFileName($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $hashName = hash('sha256', $originalName . microtime()) . '.' . $extension;

        return $hashName;
    }
}
