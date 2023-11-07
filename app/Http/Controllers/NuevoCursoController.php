<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoCursoController extends Controller
{
    public function index()
    {
        return view('CodeMasters.newCurso');
    }
}
