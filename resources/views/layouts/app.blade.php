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
    <header class="container-fluid header px-5">
        <div class="row d-flex p-3 align-items-md-center justify-content-between w-100 ">
            <div class="col-3 logo ">
                <a href="/" class="logo">
                    <div>C</div>
                    <p>Cleankode <span>Academy</span></p>
                </a>
            </div>
            <div class="col-9 navegacion  ">
                <div class="row d-flex align-items-center">
                    <div class="col-5 d-flex gap-3 justify-content-end  ">
                        <a href="#">Cursos</a>
                        <a href="#">planes</a>
                    </div>
                    <div class="col-7 d-flex align-items-center gap-5 justify-content-end ">

                        <div class="dropdown">
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

                        <a href="{{ route('register') }}" class="btn btn-success btn-lg "> <span>Registrarse</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer class="container-fluid bg-light mt-5 footer">

        <div class="container row p-5 d-flex justify-content-center align-items-center gap-5">
            <div class="col-10 ">
                <div class="row d-flex justify-content-between">
                    <div class="col-3 logo d-flex flex-column ">
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
                        <p>Estamos cambiando la forma en que el mundo aprende en linea. Nuestra plataforma te permite
                            explorar, aprender y crecer a tu ritmo.</p>
                    </div>
                    <div class="col-3">
                        <h3 class="fw-semibold">Categorías</h3>
                        <nav class="d-flex flex-column ">
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
                        <nav class="d-flex flex-column ">
                            <a href="#">Nosotro</a>
                            <a href="#">Cursos</a>
                            <a href="#">Planes</a>
                            <a href="#">Terminos y Condiciones</a>
                            <a href="#">Politicas de Privacidad</a>
                            <a href="#">Contacto</a>
                        </nav>
                    </div>
                    <div class="col-3">
                        <h3 class="fw-semibold">Descarga la App.</h3>
                        <p>Descarga la App y vive una mejor experiencia de aprendizaje.</p>
                        <a href="btnGoogle bg-black">
                            <img src="" alt="">
                            <div class="text-ligth   ">
                                <span class="fw-light">Descarga en </span>
                                <p class="fw-semibold">Google play</p>
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
