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
                <a href="/">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo">
                    <p>CleanKode <span>Academy</span></p>
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
                            <form class="dropdown-menu p-4 ">
                                <fieldset>
                                    <legend>Iniciar Sesión</legend>
                                    <div class="mb-3 email">
                                        <label for="email" class="form-label email">E-mail</label>
                                        <input type="text" class="form-control form-control-lg " id="email"
                                            placeholder="Ingresa tu E-mail" name="email">
                                    </div> 
                                    <div class="mb-3 pass">
                                        <label for="password" class="form-label pass">Contraseña</label>
                                        <input type="password" class="form-control form-control-lg " id="password"
                                            placeholder="Ingresa tu Contraseña" name="password">
                                    </div>
                                    <div class="mb-3">

                                        <a class="recuperar">¿Olvidate tu contraseña?</a>

                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Entrar</button>
                                </fieldset>
                                <hr>
                                <a href="#"
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
        @yield('contenido');
    </main>

    @vite('resources/js/app.js')
</body>

</html>
