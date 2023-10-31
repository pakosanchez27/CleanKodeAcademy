<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>CleanKode Academy | @yield('Titulo')</title>
    @vite('resources/css/app.scss')
</head>

<body>


    <header class="container-fluid  py-3 px-5 header">
        <nav class="container d-flex justify-content-between align-items-center  navegacion">
            <div class="logo">
                @auth
                    <a href="{{ route('posts.index') }}" class="logo">
                    @else
                        <a href="/" class="logo">
                @endauth

                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <p>CleanKode <span>Academy</span></p>
                </a>
            </div>
            @auth
                <div class="W-100 buscar d-none d-md-flex  ">
                    <form class="d-flex align-items-center " role="search">
                        <input class="form-control me-2 inputBuscar" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success text-light btnBuscar" type="submit">Buscar</button>
                    </form>
                </div>
            @endauth
            <div class="d-flex align-items-center gap-5 d-none d-lg-flex ">
                <a href="#">Planes</a>
                <a href="#">Cursos</a>
                @auth
                    <div class="dropdown">
                        <button class="btn btn-primary position-relative px-3 py-2" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('img/notificacion.png') }}" alt="icon de notificaion" width="20px">
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                    </div>
                    <div class="nav-usuario ">
                        <div class="dropdown ">
                            <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('img/fotoPerfil.jpg') }}" alt="icono de usuario" width="30px"
                                class="border fotoPerfil ">
                            </a>
                            <div class="dropdown-menu p-3 menu-usuario ">
                             <div class="perfil-menu d-flex gap-3  justify-content-center  ">
                                <img src="{{ asset('img/fotoPerfil.jpg') }}" alt="icono de usuario" width="30px"
                                class="border fotoPerfil ">
                                <div class="perfil-name">
                                    <p class="m-0">{{  auth()->user()->username }}</p>
                                    <span>{{ auth()->user()->name }}  {{  auth()->user()->apellido }}</span>
                                </div>
                             </div>
                             <nav>

                             </nav>
                             <hr>
                             <nav>
                                <ul class="text-end list-unstyled  ">
                                    <li><a class="dropdown-item" href="#">Planes</a></li>
                                    <li><a class="dropdown-item" href="#">Curosos</a></li>
                                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                </ul>
                             </nav>
                          </div>
                    </div>
                    <div class="dropdown border rounded border-black  p-3 d-none ">
                    @endauth
                    <div class="dropdown border rounded border-black  p-3">
                        <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-auto-close="outside">
                            Iniciar Sesión
                        </a>
                        <form class="dropdown-menu p-4 " method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <legend>Iniciar Sesión</legend>
                                <div class="mb-3 email">
                                    <label for="email" class="form-label email">E-mail</label>
                                    <input type="text"
                                        class="form-control form-control-lg @error('email') border-danger  @enderror "
                                        id="email" placeholder="Ingresa tu E-mail" name="email">
                                    @error('email')
                                        <p class="fs-6  text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 pass">
                                    <label for="password" class="form-label pass">Contraseña</label>
                                    <input type="password"
                                        class="form-control form-control-lg @error('password') border-danger  @enderror "
                                        id="password" placeholder="Ingresa tu Contraseña" name="password">
                                    @error('email')
                                        <p class="fs-6  text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">

                                    <a class="recuperar">¿Olvidate tu contraseña?</a>

                                </div>
                                <button type="submit" class="btn btn-success btn-block">Entrar</button>
                            </fieldset>
                            <hr>
                            <a href="{{ route('login-google') }}"
                                class="btn-google d-flex justify-content-center gap-3 align-items-center ">
                                <img src="{{ 'img/google.png' }}" alt="icono de google" width="25px">
                                Iniciar Sesión con Google
                            </a>
                        </form>




                    </div>
                    @auth

                    @endauth

                    <a href="{{ route('register') }}" class="btn btn-success btn-lg "> <span>Registrarse</span> </a>

                </div>
                <button class="btn btn-primary d-flex justify-content-center  align-items-center d-lg-none "
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                    aria-controls="offcanvasWithBothOptions">
                    <img src="{{ asset('img/menu.png') }}" alt="icono de menu" width="20px" class="m-0">
                </button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            <div class="logo">
                                <a href="/" class="logo">
                                    <img src="{{ asset('img/logo.png') }}" alt="">
                                    <p>CleanKode <span>Academy</span></p>
                                </a>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <hr>
                        <div class="d-flex  flex-column  gap-5 ">
                            <a href="#">Planes</a>
                            <a href="#">Cursos</a>

                            <div class="dropdown border rounded border-black  p-3">
                                <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-auto-close="outside">
                                    Iniciar Sesión
                                </a>
                                <form class="dropdown-menu p-4 " method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset>
                                        <legend>Iniciar Sesión</legend>
                                        <div class="mb-3 email">
                                            <label for="email" class="form-label email">E-mail</label>
                                            <input type="text"
                                                class="form-control form-control-lg @error('email') border-danger  @enderror "
                                                id="email" placeholder="Ingresa tu E-mail" name="email">
                                            @error('email')
                                                <p class="fs-6  text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 pass">
                                            <label for="password" class="form-label pass">Contraseña</label>
                                            <input type="password"
                                                class="form-control form-control-lg @error('password') border-danger  @enderror "
                                                id="password" placeholder="Ingresa tu Contraseña" name="password">
                                            @error('email')
                                                <p class="fs-6  text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">

                                            <a class="recuperar">¿Olvidate tu contraseña?</a>

                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Entrar</button>
                                    </fieldset>
                                    <hr>
                                    <a href="{{ route('login-google') }}"
                                        class="btn-google d-flex justify-content-center gap-3 align-items-center ">
                                        <img src="{{ 'img/google.png' }}" alt="icono de google" width="25px">
                                        Iniciar Sesión con Google
                                    </a>
                                </form>




                            </div>

                            <a href="{{ route('register') }}" class="btn btn-success btn-lg ">
                                <span>Registrarse</span> </a>

                        </div>
                    </div>
                </div>


        </nav>
    </header>


    <main>
        @yield('contenido')
    </main>

    <footer class="container-fluid bg-light mt-5 footer">

        <div class="container-fluid row p-5 d-flex  gap-5 flex-column flex-lg-row  justify-content-center ">
            <div class="col-10  ">
                <div class="row   d-flex flex-lg-row flex-column align-items-center align-items-lg-start   ">
                    <div class="col-3   logo d-flex flex-column justify-content-start align-items-start">
                        <a href="/" class="logo">
                            <div>C</div>
                            <p>Cleankode <span>Academy</span></p>
                        </a>
                        <ul class="d-flex list-unstyled  gap-2 ">
                            <li><img src="{{ asset('img/facebook.png') }}" alt="Logo de Facebook"></li>
                            <li><img src="{{ asset('img/instagram.png') }}" alt="Logo de Instagram"></li>
                            <li><img src="{{ asset('img/gorjeo.png') }}" alt="Logo de Twitter"></li>
                            <li><img src="{{ asset('img/youtube (1).png') }}" alt="Logo de Youtube"></li>
                        </ul>
                        <p class="fw-ligth">Estamos cambiando la forma en que el mundo aprende en linea. Nuestra
                            plataforma te permite
                            explorar, aprender y crecer a tu ritmo.</p>
                    </div>
                    <div class="col-3  ">
                        <h3 class="fw-semibold">Categorías</h3>
                        <nav class="d-flex flex-column gap-2 ">
                            <a href="#">Desarrollo web</a>
                            <a href="#">Desarrollo mobil</a>
                            <a href="#">Base de datos</a>
                            <a href="#">Fundamentos</a>
                            <a href="#">DevOps</a>
                            <a href="#">Ciencias de datos</a>
                            <a href="#">Inteligencia Artificial</a>
                            <a href="#">Diseño</a>
                            <a href="#">Testing</a>
                        </nav>
                    </div>
                    <div class="col-3">
                        <h3 class="fw-semibold">CleanKode Acadamy</h3>
                        <nav class="d-flex flex-column gap-2">
                            <a href="#">Nosotro</a>
                            <a href="#">Cursos</a>
                            <a href="#">Planes</a>
                            <a href="#">Terminos y Condiciones</a>
                            <a href="#">Politicas de Privacidad</a>
                            <a href="#">Contacto</a>
                        </nav>
                    </div>
                    <div class="col-3 d-flex flex-column gap-3 ">
                        <h3 class="fw-semibold">Descarga la App.</h3>
                        <p>Descarga la App y vive una mejor experiencia de aprendizaje.</p>
                        <a href="btnGoogle" class="boton-google">
                            <img src="{{ asset('img/google-play.png') }}" alt="logo de Google">
                            <div class="texto">
                                <span class="descarga">Descarga en</span>
                                <p class="google-play">Google Play</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class=" container-fluid row py-5 text-center fw-semibold">
            <div class="col-12 copy">
                <p>
                    <hr>
                    © {{ date('Y') }} CleanKode Academy. Todos los derechos reservados.
                </p>
            </div>
        </div>

    </footer>
    @vite('resources/js/app.js')
</body>

</html>
