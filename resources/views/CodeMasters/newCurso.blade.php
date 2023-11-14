@extends('layouts.app')

@section('Titulo')
    Nuevo Curso
@endsection


@section('contenido')
    <div class="container-fluid bg-primario">
        <div class="row d-flex justify-content-between  align-items-center w-100 banner-nuevoCurso">
            <div class="col">
                <h2 class="m-0  fw-bold text-light ">Agrega un Nuevo Curso.</h2>
                <p class="text-light fw-semibold ">¡Comparte tu conocimiento! Ingresa los detalles de tu nuevo curso en el
                    siguiente formulario.</p>
            </div>
            <div class="col text-end">
                <a href="{{ route('Master.index') }}" class="btn bg-black  text-light ">Regresar</a>
            </div>

        </div>
    </div>


    <div class="container d-flex justify-content-center mt-5  ">
        <div class="w-75 bg-blanco p-5 sombra " id="vista-paso1">
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
                    <form action="{{ route('newCurso.store') }}" class="row formulario-perfil form-nuevoCurso" method="POST" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col ">
                            <div class="mt-3">
                                <label for="nombre-curso" class="form-label fw-semibold">Nombre del Curso
                                </label>
                                <input class="form-control  @error('nombreCurso') border-danger  @enderror"
                                    id="nombre-curso" placeholder="Ej. Fundamentos de programacion" name="nombreCurso"
                                    type="text" value="{{ old('nombreCurso') }}">
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
                                            {{ old('idCategoria') == $categoria->idCategoria ? 'selected' : '' }}>
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
                                <label for="" class="form-label fw-semibold">Escribe una Descripción Completa</label>
                                <div id="editor" class="ql-container ql-snow">
                                    {!! old('descripcionCurso') !!} <!-- Mostrar contenido antiguo en el editor -->
                                </div>
                                <input type="hidden" name="descripcionCurso" id="descripcionCurso" value="{{ old('descripcionCurso') }}">
                            </div>
                            
                            @error('descripcionCurso')
                                <p class="fs-6 text-danger">{{ $message }}</p>
                            @enderror
                            

                            <div class="col mt-3">
                                <label for="">Sube la foto miniatura de tu curso.</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01"
                                        accept="image/pmg, image/jpeg" name="FotoCurso">
                                    @error('FotoCurso')
                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col mt-3">
                                <label for="">Sube el video Introductorio.</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01" accept="video/*"
                                        name="videoIntro">
                                    @error('videoIntro')
                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col mt-5 text-end ">
                                <input id="siguiente" class="btn bg-primario text-light " value="Crear Curso"
                                    type="submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
