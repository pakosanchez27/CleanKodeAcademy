<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NuevoCursoController extends Controller
{
    public function index(Request $request)
    {
        
        $categorias = Categorias::all();
   

        if ($request->input('modo') == 'update') {
            $curso = Curso::find($request->input('idCurso'));
            $idUser = $request->input('idUser');
            $datosCurso = array(
                'idCurso' => $curso->idCurso,
                'nombreCurso' => $curso->nombreCurso,
                'descripcionCurso' => $curso->descripcionCurso,
                'FotoCurso' => $curso->FotoCurso,
                'videoIntro' => $curso->videoIntro,
                'idCategoria' => $curso->idCategoria,
            );



            return view('CodeMasters.editCurso', compact('categorias', 'datosCurso', 'idUser'));
        } else {
            $idUser = $request->input('idUser');
            return view('CodeMasters.newCurso', compact('categorias', 'idUser'));
        }
    }

    public function store(Request $request)
    {
        $idUser = $request->input('idUser');
        

        $this->validate($request, [
            'nombreCurso' => 'required|max:255',
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
        $request->file('FotoCurso')->storeAs('public/images', $fotoCursoName);
        $request->file('videoIntro')->storeAs('public/videos', $videoIntroName);


        Curso::create([ 
            'nombreCurso' => $request->nombreCurso,
            'descripcionCurso' => $request->descripcionCurso,
            'FotoCurso' => $fotoCursoName,
            'videoIntro' => $videoIntroName,
            'idCategoria' => $request->idCategoria,
            'idEstado' => 3,
            'idUser' => $idUser
        ]);

        return redirect()->route('Master.index')->with('success', 'Curso creado correctamente');
    }



    public function update(Request $request, $idCurso)
    {

        $curso = Curso::find($idCurso);

        if (!$curso) {
            return redirect()->route('Master.index')->with('error', 'Curso no encontrado');
        }

        $this->validate($request, [
            'nombreCurso' => 'required|max:255',
            'descripcionCurso' => 'required|string|min:1',
            'idCategoria' => 'required|exists:categorias,idCategoria', // Corregir la validación
            
        ]);
       
        $curso->nombreCurso = $request->input('nombreCurso');
      
        $curso->descripcionCurso = $request->input('descripcionCurso');
        $curso->idCategoria = $request->input('idCategoria');

        

        if ($request->hasFile('FotoCurso')) {
            $this->validate($request, [
                'FotoCurso' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imagenAnterior = $curso->FotoCurso; // Obtener el nombre de la imagen actual


            $fotoCursoName = $this->generateUniqueFileName($request->file('FotoCurso'));
            $request->file('FotoCurso')->storeAs('public/images', $fotoCursoName);
            $curso->FotoCurso = $fotoCursoName;

            // Eliminar la imagen anterior si existe
            if ($imagenAnterior) {
                Storage::delete('public/images/' . $imagenAnterior);
            }
        }

        if ($request->hasFile('videoIntro')) {
            $this->validate($request, [
                'videoIntro' => 'required|mimes:mp4,avi,mov,wmv',
            ]);

            $videoAnterior = $curso->videoIntro; // Obtener el nombre de la imagen actual
            $nuevoNombreVideo = $this->generateUniqueFileName($request->file('videoIntro'));
            $request->file('videoIntro')->storeAs('public/videos', $nuevoNombreVideo);
            // Eliminar el video anterior si existe antes de asignar el nuevo nombre
            if ($videoAnterior) {
                Storage::delete('public/videos/' . $videoAnterior);
            }

            // Asignar el nuevo nombre del video al modelo
            $curso->videoIntro = $nuevoNombreVideo;

            // Guardar los cambios en la base de datos
           
        }
        $curso->save();
        return redirect()->route('Master.index')->with('success', 'Curso actualizado correctamente');
    }



    private function generateUniqueFileName($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $hashName = hash('sha256', $originalName . microtime()) . '.' . $extension;

        return $hashName;
    }
}
