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
    <div class="container-fluid header">
        <div class="row d-flex p-3 align-items-md-center  justify-content-between">
            <div class="col-7 logo">
                <a href="/">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo">
                    <p>CleanKode <span>Academy</span></p>
                </a>
            </div>
            <div class="col-5 navegacion">
                <div class="row d-flex align-items-center">
                    <div class="col d-flex gap-3">
                        <a href="#">Cursos</a>
                        <a href="#">planes</a>
                    </div>
                    <div class="col d-flex align-items-center gap-3 align-content-center ">

                        <div class="dropdown">
                            <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-auto-close="outside">
                                Iniciar Sesión
                            </a>

                            <form class="dropdown-menu p-4">
                                <p>Inicia Sesion</p>
                                <hr>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating ">
                                    <button type="submit" class="btn btn-success ">Iniciar Sesión</button>
                                </div>
                                <a href="#">¿Olvidate tu contraseña?</a>
                                <hr>    
                                <p>O Iniciar Sesión con:</p>
                                <a href="#"
                                    class="btn btn-google d-flex justify-content-center gap-3 align-items-center ">
                                    <img src="{{ 'img/google.png' }}" alt="icono de google" width="25px">
                                    <span>Iniciar Sesión con Google</span>
                                </a>
                            </form>
                        </div>

                        <a href="#" class="btn btn-outline-success ">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
