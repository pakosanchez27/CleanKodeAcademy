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

    <div class="container p-5 w-100 d-flex justify-content-center  ">
        <div class="row procesos-Crear w-75   ">
            <div class="col paso d-flex w-100 gap-3 justify-content-center align-items-center  ">
                <span class=" activo fw-semibold ">1</span>
                <div class="d-flex  ">
                    <p class="m-0 w-100 ">Información Básica</p>

                </div>
            </div>

            <div class="col paso d-flex w-100 gap-3 justify-content-center align-items-center">
                <span>2</span>
                <div class="d-flex">
                    <p class="m-0 w-100 ">Información por Clase</p>

                </div>
            </div>

            <div class="col paso d-flex w-100 gap-3 justify-content-center align-items-center">
                <span>3</span>
                <div class="d-flex">
                    <p class="m-0 w-100 ">Información Básica</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center ">
        <div class="w-75 bg-blanco p-5 sombra d-none" id="vista-paso1">
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
                    <form class="row formulario-perfil">
                        <div class="col " >
                            <div class="mt-3">
                                <label for="nombre-curso" class="form-label fw-semibold">Nombre del Curso
                                </label>
                                <input class="form-control" id="nombre-curso" placeholder="Ej. Fundamentos de programacion"
                                    type="text" required="">
                                <small>Coloca un nombre breve, pero descriptivo de tu curso.</small>
                            </div>
                            <div class="col mt-3">
                                <label for="categoria" class="form-label fw-semibold">Categoria
                                </label>
                                <select name="categoria" id="categoria" class="w-100">
                                    <option selected disabled>--Selecciona una categoria--</option>
                                    <option value="1">Desarrollo Web</option>
                                    <option value="2">Desarrollo Mobil</option>
                                    <option value="3">Base de datos</option>
                                    <option value="4">Fundamentos</option>
                                    <option value="5">DevOps</option>
                                    <option value="6">Ciencia de Datos</option>
                                    <option value="7">Inteligencia Artificial</option>
                                    <option value="8">Diseño & Marketing</option>
                                    <option value="9">Tester</option>
                                </select>
                                <small>Selecciona la categoria a la que pertenece tu curso.</small>
                            </div>

                            <div class="col mt-3">
                                <label for="" class="form-label fw-semibold">Escribe una Descripción Completa
                                </label>
                                <div id="editor" class="ql-container ql-snow">

                                    <div class="ql-editor" data-gramm="false" contenteditable="true">
                                        <p>Coloca todos los detalles de tu curso</p>
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                            target="_blank" href="about:blank"></a><input type="text"
                                            data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a
                                            class="ql-action"></a><a class="ql-remove"></a></div>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <label for="">Sube la foto miniatura de tu curso.</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01" accept="image/pmg, image/jpeg">
                                </div>
                            </div>
                            <div class="col mt-3">
                                <label for="">Sube el video Introductorio.</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01" accept="Video/*">
                                </div>
                            </div>
                            <div class="col mt-5 text-end ">
                                <a href="#" id="siguiente" class="btn bg-primario text-light ">Sigueinte</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="w-75 bg-blanco p-5 sombra " id="vista-paso2">
            <!-- Card -->
            <div class="w-100 mb-4 rounded ">
                <!-- Card Header -->
                <div class="card-header p-2 ">
                    <h3 class="mb-0 fw-semibold ">Informacion por Clase</h4>
                </div>
                <hr>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Form -->
                    <form class="row formulario-perfil">
                        <div class="col " >

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
