@extends('layouts.app')

@section('Titulo')
    Nuevo Curso
@endsection


@section('contenido')
    <div class="container-fluid bg-primario">
        <div class="row d-flex justify-content-between  align-items-center w-100 banner-nuevoCurso container m-auto">
            <div class="col-8">
                <h2 class="m-0  fw-bold text-light ">Crea, Agrega, Edita o Administra tus clases del curso: <span class=" text-bg-dark  p-1">{{$nombreCurso}}</span></h2>
                <p class="text-light fw-semibold mt-3 ">Divide tus clases en Capitulos, asi poder llevar una mejor estructura</p>
            </div>
            <div class="col-4 text-end">
                <a href="{{ route('Master.index') }}" class="btn bg-black  text-light ">Regresar</a>
            </div>

        </div>
    </div>

    <div class="container w-50 ">
        <div class="row sombra p-4 bg-blanco mt-5 ">
            <h3 class="fw-semibold m-1">Crea un capitulo</h3>
            <form action="" class="formulario-perfi mt-4 ">
                <div class="row ">
                    <div class="col-10 ">
                        <input class="form-control form-control-lg" type="text" placeholder="Nombre del Capitulo"
                            aria-label=".form-control-lg example">
                    </div>
                    <div class="col-2">
                        <input class="btn btn-primary" type="submit" value="Crear">
                    </div>
                </div>
            </form>

        </div>

    </div>

    <div class="contenedor-clases mt-4 sombra container w-50 bg-blanco p-4">
        <div class="capitulo">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed h3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Introduccion
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="clase  d-flex justify-content-between align-items-center ">
                                <div class="">
                                    <h4 class="h4">Nombre de la clase</h4>
                                    <div class="">
                                        <p class="m-0 fw-light fst-italic  h5">Duracion: 1:30</p>
                                        <p class="m-0 fw-light fst-italic  h5">Fecha de creacion: 12/12/2021</p>
                                    </div>


                                </div>

                                <div class="acciones d-flex gap-3  ">
                                    <a href="#" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>
                                    <a href="#" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </div>

                            </div>
                            <hr>
                            <div class="clase  d-flex justify-content-between align-items-center ">
                                <div class="">
                                    <h4 class="h4">Nombre de la clase</h4>
                                    <div class="">
                                        <p class="m-0 fw-light fst-italic  h5">Duracion: 1:30</p>
                                        <p class="m-0 fw-light fst-italic  h5">Fecha de creacion: 12/12/2021</p>
                                    </div>


                                </div>

                                <div class="acciones d-flex gap-3  ">
                                    <a href="#" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>
                                    <a href="#" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-trash3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a>
                                </div>

                            </div>
                        </div>
                        <button type="button" class="btn btn-primary h5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <p class="h5">Agregar Clase</p>
                          </button>
                    </div>
                   
                </div>

            </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold " id="staticBackdropLabel">Agregar Clase</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="" class="p-3">
                        <div class="mb-3">
                            <label for="clase" class="form-label">Nombre de la clase</label>
                            <input class="form-control" type="text" placeholder="Ej. Variables con JS" aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <label for="clase" class="form-label">Duración</label>
                            <input class="form-control" type="number" placeholder="Ej. 3.51" aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <label for="clase" class="form-label">Descripcion</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="input-group mb-3 d-flex flex-column ">
                            <label for="clase" class="form-label">Video de la clase</label>
                            <div class=" d-flex ">
                                <label class="input-group-text btn text-light " for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            
                          </div>
                          <div class="input-group mb-3 d-flex flex-column ">
                            <label for="clase" class="form-label">Recursos de la clase</label>
                            <div class=" d-flex ">
                                <label class="input-group-text btn text-light " for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            
                          </div>
                    </form>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Crear</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
