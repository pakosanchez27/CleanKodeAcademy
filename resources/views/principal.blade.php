@extends('layouts.app')

@section('Titulo')
    Inicio
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row bg-inicio  ">
            <div class="d-flex flex-column texto-header justify-content-md-center  ">
                <h1 class=" text-uppercase fw-bold ">Tu futuro profecional esta a unos cuantos clicks</h1>
                <p class="mb-5">Contamos con curso que te ayudara a alcanzar tu objetivo profesional en la industria de la
                    TI.</p>
                <a href="#" class=" btn btn-negro">Comienza ahora</a>
            </div>
        </div>
    </div>
    <section
        class="container-fluid beneficios   ">

        <div class="container  w-100 d-flex flex-column flex-md-row flex-lg-column align-items-md-center align-items-lg-start g-3 gap-md-5 ">
            <h2 class="fw-bold text-md-center  ">Beneficios de Estudiar con nosotros</h2>

            <div class="beneficios-modulos d-flex flex-column flex-lg-row gap-5  ">
                <div class="modulo">
                    <h3 class="fw-bold">Aprendé a tu ritmo.</h3>
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                </div>
                <div class="modulo">
                    <h3 class="fw-bold">Cursos Actualizados.</h3>
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                </div>
                <div class="modulo">
                    <h3 class="fw-bold">Rutas de Aprendizaje.</h3>
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                </div>
            </div>
        </div>

    </section>

    <section class="container-fluid cursos-populares">
        <h2>Cursos Populares</h2>
        <div class=" cardsCursos ">
            <div class="row gap-3  row-cols-2">
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3 justify-content-between  " >
                        <span class="badge bg-primario ">Desarrollo web</span>
                        <h3 class="card-title ">Fundamentos de JavaScript</h3>
                        <p>Creado por: <span>Alicia Sánchez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-java.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3 ">
                        <span class="badge bg-primario ">Desarrollo web</span>
                        <h3 class="card-title ">Back-end con JAVA</h3>
                        <p>Creado por: <span>Francisco Sánchez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-react.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3 ">
                        <span class="badge bg-primario ">Desarrollo web</span>
                        <h3 class="card-title ">Desarrollo de Apps con React.js</h3>
                        <p>Creado por: <span>Magali Martinez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-php.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3">
                        <span class="badge bg-primario ">Fundamentos de PHP</span>
                        <h3 class="card-title ">Fundamentos de JavaScript</h3>
                        <p>Creado por: <span>Samuel Ramirez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                
            </div>
           
        </div>
    </section>
    <section class="container-fluid cursos-populares">
        <h2>Cursos Populares</h2>
        <div class=" cardsCursos ">
            <div class="row gap-3  row-cols-2">
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3 justify-content-between  " >
                        <span class="badge bg-primario ">Desarrollo web</span>
                        <h3 class="card-title ">Fundamentos de JavaScript</h3>
                        <p>Creado por: <span>Alicia Sánchez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-java.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3 ">
                        <span class="badge bg-primario ">Desarrollo web</span>
                        <h3 class="card-title ">Back-end con JAVA</h3>
                        <p>Creado por: <span>Francisco Sánchez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-react.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3 ">
                        <span class="badge bg-primario ">Desarrollo web</span>
                        <h3 class="card-title ">Desarrollo de Apps con React.js</h3>
                        <p>Creado por: <span>Magali Martinez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                <div class="card col" style="width: 18rem;">
                    <img src="{{ asset('img/bg-php.png') }}" class="card-img-top object-fit-contain " alt="...">
                    <div class="card-body d-flex flex-column align-items-start  gap-3">
                        <span class="badge bg-primario ">Fundamentos de PHP</span>
                        <h3 class="card-title ">Fundamentos de JavaScript</h3>
                        <p>Creado por: <span>Samuel Ramirez</span></p>
                        <div class="valoracion mb-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                    </div>
                </div> <!-- fin card -->
                
            </div>
           
        </div>
    </section>
@endsection
