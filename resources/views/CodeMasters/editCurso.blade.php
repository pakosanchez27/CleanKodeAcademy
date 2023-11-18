@extends('layouts.app')

@section('Titulo')
    Nuevo Curso
@endsection


@section('contenido')
    <div class="container-fluid bg-primario d-flex justify-content-center ">
        <div class="row container-fluid container-md d-flex w-100 w-md-75 banner-nuevoCurso ">
            <div class="col-md-12 col-lg-7">
                <h2 class="m-0  fw-bold text-light ">Editar Curso : {{ $datosCurso['nombreCurso'] }}.</h2>
                <p class="text-light fw-semibold ">Edita los aspectos generales de tu curso</p>
            </div>
            <div class="col-md-12 col-lg-5 d-flex justify-content-lg-end align-content-center   ">
                <a href="{{ route('Master.index') }}" class="btn bg-black  text-light  ">Regresar</a>
            </div>

        </div>
    </div>


    <div class="container d-flex justify-content-center mt-5  ">
        <div class="w-100 w-md-75 bg-blanco p-5 sombra " id="vista-paso1">
            <!-- Card -->
            <div class="w-100 mb-4 rounded ">
                <!-- Card Header -->
                <div class="card-header p-2 ">
                    <h3 class="mb-0 fw-semibold ">Informacion Basica</h4>
                </div>
                <hr>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Form -->
                    <form action="{{route('newCurso.update', ['idCurso' => $datosCurso['idCurso']]) }}" class="row formulario-perfil form-nuevoCurso" method="POST" novalidate
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col ">
                            <div class="mt-3">
                                <label for="nombre-curso" class="form-label fw-semibold">Nombre del Curso
                                </label>
                                <input class="form-control  @error('nombreCurso') border-danger  @enderror"
                                    id="nombre-curso" placeholder="Ej. Fundamentos de programacion" name="nombreCurso"
                                    type="text" value="{{ $datosCurso['nombreCurso'] }}">
                                @error('nombreCurso')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                                <small>Coloca un nombre breve, pero descriptivo de tu curso.</small>
                            </div>
                            <div class="col mt-3">
                                <label for="categoria" class="form-label fw-semibold">Categoria
                                </label>
                                <select name="idCategoria" id="categoria"
                                    class="w-100 @error('nombreCurso') border-danger @enderror"
                                    value="{{ old('idCategoria') }}">
                                    <option selected disabled>--Selecciona una categoría--</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->idCategoria }}"
                                            {{ $datosCurso['idCategoria'] == $categoria->idCategoria ? 'selected' : '' }}>
                                            {{ $categoria->nomCategoria }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('idCategoria')
                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                @enderror
                                <small>Selecciona la categoria a la que pertenece tu curso.</small>
                            </div>

                            <div class="col mt-3">
                                <label for="" class="form-label fw-semibold">Escribe una Descripción
                                    Completa</label>
                                <div id="editor" class="ql-container ql-snow">
                                    @php
                                        $texto = $datosCurso['descripcionCurso'];
                                        echo $texto;
                                    @endphp


                                </div>
                                <input type="hidden" name="descripcionCurso" id="descripcionCurso"
                                    value="{{ old('descripcionCurso') }}">
                            </div>

                            @error('descripcionCurso')
                                <p class="fs-6 text-danger">{{ $message }}</p>
                            @enderror


                            <div class="col mt-3">
                                <label for="">Sube la foto miniatura de tu curso.</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="imagen">Upload</label>
                                    <input type="file" class="form-control" id="imagen" accept="image/*"
                                        name="FotoCurso">
                                    @error('FotoCurso')
                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col mt-3">
                                <label for="video">Sube el video Introductorio.</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="video">Upload</label>
                                    <input type="file" class="form-control" id="video" accept="video/*"
                                        name="videoIntro">
                                    @error('videoIntro')
                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col mt-5 text-end ">
                                <input id="siguiente" class="btn bg-primario text-light " value="Guardar"
                                    type="submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
