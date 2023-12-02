<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Capitulos;
use App\Models\Clases;
use Google\Service\CloudSourceRepositories\Repo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrearClasesController extends Controller
{
    public function index(Request $request)
    {
        $idCurso = $request->input('idCurso');
        $nombreCurso = Curso::find($idCurso)->nombreCurso;
        $capitulos = Capitulos::all();
        $clasesPorCapitulo = Clases::all()->groupBy('idCapitulo');
        $clases = Clases::all();
        $ids = $clases->pluck('idClase')->all();


        return view('CodeMasters.clases', compact('nombreCurso', 'idCurso', 'capitulos', 'clasesPorCapitulo', 'clases'));
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

    public function update(Request $request, $idClase)
    {

        $clase = Clases::find($idClase);
        $idCapitulo = $clase->idCapitulo;
        $idCurso = Capitulos::find($idCapitulo)->idCurso;

        $this->validate($request, [
            'nombreClase' => 'required|max:255',
            'duracionClase' => 'required|max:255',
            'descripcionClase' => 'required',
            'videoClase' => 'mimetypes:video/mp4,video/avi,video/quicktime,video/x-ms-wmv',
        ]);

        $clase->nombreClase = $request->nombreClase;
        $clase->duracionClase = $request->duracionClase;
        $clase->descripcionClase = $request->descripcionClase;

        if ($request->hasFile('videoClase')) {
            // Obtener el nombre del archivo actual de la clase
            $videoActual = $clase->videoClase;

            // Generar un nombre único para el nuevo archivo
            $videoClaseName = $this->generateUniqueFileName($request->file('videoClase'));

            // Eliminar el archivo anterior si existe
            if ($videoActual !== null && Storage::exists('public/videos/' . $videoActual)) {
                Storage::delete('public/videos/' . $videoActual);
            }

            // Guardar el nuevo archivo
            $request->file('videoClase')->storeAs('public/videos', $videoClaseName);
            $clase->videoClase = $videoClaseName;
        }

        // Hacer lo mismo para el recursoClase si es necesario
        if ($request->hasFile('recursoClase')) {
            // Obtener el nombre del archivo actual del recurso de la clase
            $recursoActual = $clase->recursoClase;

            // Generar un nombre único para el nuevo archivo
            $recursoName = $this->generateUniqueFileName($request->file('recursoClase'));

            // Eliminar el archivo anterior si existe
            if ($recursoActual !== null && Storage::exists('public/recursos/' . $recursoActual)) {
                Storage::delete('public/recursos/' . $recursoActual);
            }

            // Guardar el nuevo archivo
            $request->file('recursoClase')->storeAs('public/recursos', $recursoName);
            $clase->recursoClase = $recursoName;
        }

        // Guardar los cambios en la base de datos
        $clase->save();
        return redirect()->route('clases.index', ['idCurso' => $idCurso])->with('success', 'Clase actualizada correctamente');
    }

     public function destroy($idClase){
        $clase = Clases::find($idClase);
        $idCapitulo = $clase->idCapitulo;
        $idCurso = Capitulos::find($idCapitulo)->idCurso;

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

        return redirect()->route('clases.index', ['idCurso' => $idCurso])->with('success', 'Clase eliminada correctamente');
     }


    private function generateUniqueFileName($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $hashName = hash('sha256', $originalName . microtime()) . '.' . $extension;

        return $hashName;
    }
}
