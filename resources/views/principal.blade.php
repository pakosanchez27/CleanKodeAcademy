@extends('layouts.app')

@section('Titulo')
    Inicio
@endsection

@section('contenido')
    <section class="container-fluid bg-inicio">
        <div class="container">
            <div class="row d-flex flex-column mt-md-5 texto-header">
                <div class="col-12 col-md-9 col-lg-8 mt-lg-5  ">
                    <h1 class=" text-uppercase fw-bold ">Tu futuro profecional esta a unos cuantos clicks</h1>
                    <p class="mb-5">Contamos con curso que te ayudara a alcanzar tu objetivo profesional en la industria de
                        la
                        TI.</p>
                    <a href="#" class=" btn btn-negro">Comienza ahora</a>
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid beneficios bg-light mb-5 p-5 populares-banner">
        <div class="container">
            <div
                class="container  w-100 d-flex flex-column flex-md-row flex-lg-column align-items-md-center align-items-lg-start g-3 gap-md-5 ">
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
        </div>


    </section>

    <section class="container cursos-populares text-center p-5 mt-5 mb-5 ">
        <h2 class=" m-0  ">Cursos Populares</h2>
        <p class="mb-5">Elije entre la variedad de cursos sobre el mundo de la tecnologia y más...</p>
        <nav class="container d-flex justify-content-center p-4 w-100 flex-wrap  populares-banner align-items-center mb-5   ">
            <a href="#" id="web" class="active">Desarrollo Web</a>
            <a href="#" id="movil">Desarrollo Movil</a>
            <a href="#" id="base">Base de Datos</a>
            <a href="#" id="fundamentos">Fundamentos</a>
            <a href="#" id="IA">Inteligencia Artificial</a>
        </nav>
        <div class=" container-fluid cardsCursos  " id="CursosWeb">
            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
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
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
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
            <div class="card " style="width: 18rem;">
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
        <div class=" container-fluid cardsCursos d-none " id="CursosMobile">
            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
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
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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





        </div>
        <div class=" container-fluid cardsCursos d-none " id="CursosBase">
            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
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
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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





        </div>
        <div class=" container-fluid cardsCursos d-none " id="CursosFundamentos">
            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
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
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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





        </div>
        <div class=" container-fluid cardsCursos d-none " id="CursosIA">
            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
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
            <div class="card " style="width: 18rem;">
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

            <div class="card " style="width: 18rem;">
                <img src="{{ asset('img/bg-js.png') }}" class="card-img-top object-fit-contain " alt="...">
                <div class="card-body shadow d-flex flex-column align-items-start  gap-3 justify-content-between  ">
                    <span class="badge bg-primario ">Desarrollo web</span>
                    <h3 class="card-title   ">Fundamentos de JavaScript</h3>
                    <p>Creado por: <span>Alicia Sánchez</span></p>
                    <div class="valoracion mb-auto">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <a href="#" class="btn bg-primario text-light d-block w-100 ">Ver detalle</a>
                </div>
            </div> <!-- fin card -->
            <div class="card " style="width: 18rem;">
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
        </div>
    </section>

    <section class="container-fluid ">
        <div class=" container  banner-classFree p-5 text-light d-flex flex-column gap-4 justify-content-center align-items-center  h-auto text-center">
            <h2 class="fw-bold m-0">Las primeras clases de cada curso son total mente Gratis.</h2>
            <p class="text-center">¿Por qué esperar? ¡Inscríbete ahora y aprovecha esta increíble oportunidad de
                aprendizaje con clases gratuitas! Descubre lo que podemos ofrecerte en estas lecciones sin costo y da el
                primer paso hacia un futuro lleno de conocimiento y éxito.
            </p>
            <a href="{{ route('register') }}" class=" btn btn-negro">Registraté</a>
            
        </div>
    </section>

    <section class="container-fluid">
        <div class=" container text-center mt-5 w-75">
            <h2 class=" m-0 fw-semibold">Precios</h2>
            <p class="mb-5">¿Listo para llevar tu aprendizaje al siguiente nivel? Ofrecemos tres emocionantes opciones de
                suscripción, cada una diseñada para satisfacer tus necesidades educativas de manera única</p>

            <div class="contenedor-paqutes d-flex flex-column flex-md-row flex-md-wrap ">
                <div class="card-paquete basico d-flex flex-column gap-3 justify-content-between shadow  order-2 order-lg-0">
                    <h3>Mensual</h3>
                    <p class="precio fw-semibold">$200 MXN <span class="fw-light ">Mensual</span></p>

                    <ul class="mb-auto  ">
                        <li>Acceso a todas los cursos</li>
                        <li>Acceso a los recursos de los cursos</li>
                        <li>Seccion de comentarios y preguntas de la clase</li>
                        <li>Certificado digital al finalizar el curso</li>
                    </ul>

                    <a href="#" class="btn bg-primario">Comprar</a>
                </div>

                <div class="card-paquete completo d-flex flex-column gap-3 justify-content-between shadow order-1">
                    <h3>Anual <span class="badge text-bg-info text-light ">Recomendado</span></h3>
                    <p class="precio fw-semibold">$1000 MXN <span class="fw-light ">Anual</span></p>

                    <ul class="mb-auto  ">
                        <li>Acceso a todas las calses del curso</li>
                        <li>Acceso a los recursos de la clase</li>
                        <li>Seccion de comentarios y preguntas de la clase</li>
                        <li>Certificado digital al finalizar el curso</li>
                        <li>Acceso a foros y conferencias</li>
                    </ul>

                    <a href="#" class="btn btn-negro">Comprar</a>
                </div>
                <div class="card-paquete basico d-flex flex-column gap-3 justify-content-between shadow order-3">
                    <h3>Por curso</h3>
                    <p class="precio fw-semibold">$600 MXN <span class="fw-light ">Mensual</span></p>

                    <ul class="mb-auto  ">
                        <li>Acceso a todas los cursos</li>
                        <li>Acceso a los recursos de los cursos</li>
                        <li>Seccion de comentarios y preguntas de la clase</li>
                        <li>Certificado digital al finalizar el curso</li>
                    </ul>

                    <a href="#" class="btn bg-primario">Comprar</a>
                </div>
            </div>
        </div>
    </section>
@endsection
