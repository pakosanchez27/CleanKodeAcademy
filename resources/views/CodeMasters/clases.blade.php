@extends('layouts.app')

@section('Titulo')
    Nuevo Curso
@endsection


@section('contenido')
    @if (session('success'))
        <div class="toast fade show  Notificacion sombra p-3 bg-blanco  " role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header Notifi-exito">
                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%"></rect>
                </svg>
                <strong class="me-auto h4">Notificación</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif
    <div class="container-fluid bg-primario d-flex justify-content-center align-items-center  p-5 ">
        <div class="row container w-75 d-flex justify-content-between align-items-center ">
            <div class="col-8">
                <h2 class="m-0  fw-bold text-light ">Crea, Agrega, Edita o Administra tus clases del curso: <span
                        class=" text-bg-dark  p-1">{{ $nombreCurso }}</span></h2>
                <p class="text-light fw-semibold mt-3 ">Divide tus clases en Capitulos, asi poder llevar una mejor
                    estructura
                </p>
            </div>
            <div class="col-4 text-end w-25">
                <a href="{{ route('Master.index') }}" class="btn bg-black  text-light align-items-end">Regresar</a>
            </div>

        </div>
    </div>

    <div class="container w-75 ">
        <div class="row sombra p-4 bg-blanco mt-5 ">
            <h3 class="fw-semibold m-1">Crea un capitulo</h3>
            <form class="formulario-perfi mt-4" method="POST"
                action="{{ route('crearCapitulo.store', ['idCurso' => $idCurso]) }}">
                @csrf
                <div class="row ">
                    <div class="col-10 ">
                        <input class="form-control form-control-lg p-3 " type="text" placeholder="Nombre del Capitulo"
                            aria-label=".form-control-lg example" name="capitulo" required>
                        @error('capitulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <input class="btn btn-primary" type="submit" value="Crear">
                    </div>
                </div>
            </form>

        </div>

    </div>

    <div class="contenedor-clases mt-4 sombra container w-75 bg-blanco p-4">
        <div class="capitulo">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @if ($capitulos->isEmpty())
                    <div class="alert alert-info text-center fw-semibold " role="alert">
                        <p>Aun no hay Capitulos para este curso</p>
                    </div>
                @endif
                @foreach ($capitulos as $capitulo)
                    <div class="accordion-item">
                        <h2 class="accordion-header d-flex ">
                            <button class="accordion-button collapsed h3 fw-semibold " type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $capitulo->idCapitulo }}"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                {{ $capitulo->nombreCapitulo }}
                            </button>
                            <div class="d-flex gap-3 justify-content-center align-items-center ">

                                <a href="#" class=" border-0 bg-blanco text-warning " data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $capitulo->idCapitulo }}" data-bs-whatever=""><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>

                                <div class="modal fade" id="exampleModal{{ $capitulo->idCapitulo }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Nombre del
                                                    Capitulo</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ route('crearCapitulo.update', ['idCapitulo' => $capitulo->idCapitulo]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input class="form-control form-control-lg p-3 " type="text"
                                                        aria-label=".form-control-lg example" name="capitulo"
                                                        value="{{ $capitulo->nombreCapitulo }}">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-danger text-light "
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <input type="submit" class="btn bg-success text-light"
                                                    value="Actualizar">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('crearCapitulo.destroy', ['idCapitulo' => $capitulo->idCapitulo]) }}" method="POST" id="formEliminarCapitulo">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 text-danger bg-blanco" onclick="return confirm('¿Estás seguro de eliminar? Se eliminarán todas las clases asociadas a este capítulo.');">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                    </button>
                                </form>

                            </div>

                        </h2>
                        <div id="flush-collapse{{ $capitulo->idCapitulo }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">


                                @if ($clasesPorCapitulo->has($capitulo->idCapitulo))
                                    @foreach ($clasesPorCapitulo[$capitulo->idCapitulo] as $clase)
                                        <div class="clase  d-flex justify-content-between align-items-center ">
                                            <div class="row w-100 ">
                                                <div class="col-6">
                                                    <h4 class="h4">{{ $clase->nombreClase }}</h4>
                                                    <div class="">
                                                        <p class="m-0 fw-light fst-italic  h5">Duracion: 1:30</p>
                                                        <p class="m-0 fw-light fst-italic  h5">Fecha de creacion:
                                                            12/12/2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 d-flex gap-3 justify-content-end align-items-center  ">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#exampleVideo{{ $clase->idClase }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-file-earmark-play-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6 6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V6.884z" />
                                                        </svg>Preview
                                                    </button>
                                                    @if ($clase->recursoClase)
                                                        <a href="{{ asset('storage/recursos/' . $clase->recursoClase) }}"
                                                            target="_blank" class="btn bg-info  text-light"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                                                            </svg>Recurso</a>
                                                    @endif
                                                    <div class="container ">
                                                        <!-- Modal -->
                                                        <div class="modal fade " id="exampleVideo{{ $clase->idClase }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog   ">
                                                                <div class="modal-content previewVideo ">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5 fw-semibold "
                                                                            id="exampleModalLabel">
                                                                            Preview del Video</h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="">
                                                                            <video
                                                                                src="{{ asset('/storage/videos/' . $clase->videoClase) }}"
                                                                                controls width="100%"></video>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="acciones d-flex gap-3  ">

                                                <button type="button" class="border-0 text-warning " data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop{{$clase->idClase}}">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </button>
                                                <div class="modal fade" id="staticBackdrop{{ $clase->idClase }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 fw-semibold " id="staticBackdropLabel">Agregar
                                                                    Clase</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('crearClase.update', ['idClase' => $clase->idClase]) }}"
                                                                    method="POST" enctype="multipart/form-data" class="form-nuevoCurso2">

                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="mb-3">
                                                                        <label for="clase" class="form-label">Nombre de la clase</label>
                                                                        <input class="form-control" type="text"
                                                                            placeholder="Ej. Variables con JS"
                                                                            aria-label="default input example" name="nombreClase"
                                                                            value="{{ $clase->nombreClase}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="clase" class="form-label">Duración</label>
                                                                        <input class="form-control" type="text" placeholder="Ej. 3.51"
                                                                            aria-label="default input example" name="duracionClase"
                                                                            value="{{ $clase->duracionClase }}">
                                                                    </div>

                                                                    <div class="col mt-3">
                                                                        <label for="descripcionCurso"
                                                                            class="form-label fw-semibold form-nuevoCurso">Escribe una
                                                                            Descripción Completa</label>
                                                                        <div id="editor2" class="ql-container ql-snow">
                                                                            @php
                                                                                $texto = $clase->descripcionClase;
                                                                                echo $texto;
                                                                            @endphp
                                                                            <!-- Mostrar contenido antiguo en el editor -->
                                                                        </div>
                                                                        <input type="hidden" name="descripcionClase" id="descripcionCurso"
                                                                            value="{{ old('descripcionClase') }}">
                                                                    </div>

                                                                    @error('descripcionClase')
                                                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                                                    @enderror

                                                                    <div class="input-group mb-3 d-flex flex-column ">
                                                                        <label for="videoClase" class="form-label">Video de la clase</label>
                                                                        <div class=" d-flex ">
                                                                            <label class="input-group-text btn text-light "
                                                                                for="videoClase">Upload</label>
                                                                            <input type="file" class="form-control" id="videoClase"
                                                                                name="videoClase" accept="video/*">

                                                                        </div>
                                                                        <video  width="200" height="100" class="mt-2" controls src="{{asset('storage/videos/' . $clase->videoClase)}}"></video>

                                                                    </div>
                                                                    @error('videoClase')
                                                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                    <div class="input-group mb-3 d-flex flex-column ">
                                                                        <label for="clase" class="form-label">Recursos de la clase</label>
                                                                        <div class=" d-flex ">
                                                                            <label class="input-group-text btn text-light "
                                                                                for="clase">Upload</label>
                                                                            <input type="file" class="form-control" id="clase"
                                                                                name="recursoClase" accept=".pdf, .docx, .doc">
                                                                        </div>
                                                                        @error('recursoClase')
                                                                            <p class="fs-6 text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal">Cerrar</button>
                                                                        <input type="submit" class="btn btn-success ">
                                                                    </div>
                                                                </form>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>


                                                <form action="{{ route('crearClase.destroy', ['idClase' => $clase->idClase]) }}" method="POST" id="formEliminarClase">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="border-0 bg-blanco text-danger " onclick="confirmarEliminacion('{{ $clase->nombreClase }}')"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                    </svg></button>
                                                </form>

                                            </div>

                                        </div>
                                        <hr>
                                    @endforeach
                                @else
                                    <div class="alert alert-info text-center fw-semibold " role="alert">
                                        <p>Aun no hay Clases para este capitulo</p>
                                    </div>
                                @endif

                            </div>

                            <button type="button" class="btn btn-primary h5" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop1{{ $capitulo->idCapitulo }}">
                                <p class="h5">Agregar Clase</p>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1{{ $capitulo->idCapitulo }}"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold " id="staticBackdropLabel">Agregar
                                                Clase</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="{{ route('crearClase.store', ['idCapitulo' => $capitulo->idCapitulo]) }}"
                                                method="POST" enctype="multipart/form-data" class="form-nuevoCurso2">

                                                @csrf
                                                <div class="mb-3">
                                                    <label for="clase" class="form-label">Nombre de la clase</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Ej. Variables con JS"
                                                        aria-label="default input example" name="nombreClase"
                                                        value="{{ old('nombreClase') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="clase" class="form-label">Duración</label>
                                                    <input class="form-control" type="text" placeholder="Ej. 3.51"
                                                        aria-label="default input example" name="duracionClase"
                                                        value="{{ old('duracionClase') }}">
                                                </div>

                                                <div class="col mt-3">
                                                    <label for="descripcionCurso"
                                                        class="form-label fw-semibold form-nuevoCurso">Escribe una
                                                        Descripción Completa</label>
                                                    <div id="editor2" class="ql-container ql-snow">
                                                        {!! old('descripcionClase') !!}
                                                        <!-- Mostrar contenido antiguo en el editor -->
                                                    </div>
                                                    <input type="hidden" name="descripcionClase" id="descripcionCurso"
                                                        value="{{ old('descripcionClase') }}">
                                                </div>

                                                @error('descripcionClase')
                                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                                @enderror

                                                <div class="input-group mb-3 d-flex flex-column ">
                                                    <label for="videoClase" class="form-label">Video de la clase</label>
                                                    <div class=" d-flex ">
                                                        <label class="input-group-text btn text-light "
                                                            for="videoClase">Upload</label>
                                                        <input type="file" class="form-control" id="videoClase"
                                                            name="videoClase" accept="video/*">
                                                    </div>

                                                </div>
                                                @error('videoClase')
                                                    <p class="fs-6 text-danger">{{ $message }}</p>
                                                @enderror
                                                <div class="input-group mb-3 d-flex flex-column ">
                                                    <label for="clase" class="form-label">Recursos de la clase</label>
                                                    <div class=" d-flex ">
                                                        <label class="input-group-text btn text-light "
                                                            for="clase">Upload</label>
                                                        <input type="file" class="form-control" id="clase"
                                                            name="recursoClase" accept=".pdf, .docx, .doc">
                                                    </div>
                                                    @error('recursoClase')
                                                        <p class="fs-6 text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <input type="submit" class="btn btn-success ">
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
