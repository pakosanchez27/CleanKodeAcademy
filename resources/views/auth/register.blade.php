<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>CleanKode Academy | Registrate</title>
    @vite('resources/css/app.scss')
</head>

<body class="bg-light">
    <div class="container-fluid container-register">

        <div class="bg-register">
            <div class="degradado"></div>
            <div class="register-contendio">
                <div class=" logo register-logo d-flex justify-content-end  ">
                    <a href="/" class="m-5 logo">
                        <div >C</div>
                        <p>CleanKode <span>Academy</span></p>
                    </a>
                </div>
                <div class="register-beneficios ">
                    <h2>Descubre cursos que te ayudaran a alcanzar el éxito en el mundo de la tecnología</h2>
                    <ul>
                        <li>
                            <img src="{{ 'img/cheque.png' }}" alt="">
                            <p>Aprendizaje a su propio ritmo.</p>
                        </li>
                        <li>
                            <img src="{{ 'img/cheque.png' }}" alt="">
                            <p>Cursos Actualizados.</p>
                        </li>
                        <li>
                            <img src="{{ 'img/cheque.png' }}" alt="">
                            <p>Clases Gratis.</p>
                        </li>
                        <li>
                            <img src="{{ 'img/cheque.png' }}" alt="">
                            <p>Aprende donde sea.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="contenedor-formulario ">
            <div class="contenido-formulario">
                <h3>
                    !Crea una Cuenta Gratis¡
                </h3>
                <p>
                    Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesion</a>
                </p>

                <form action="{{ route('register') }}" class="container-fluid  formulario" method="POST" novalidate>
                    @csrf
                    <div class="mb-3 nombre">
                        <label for="nombre" class="form-label nombre">Nombre</label>
                        <input type="text"
                            class="form-control form-control-lg @error('name') border-danger  @enderror " id="name"
                            placeholder="Tu nombre" value="{{ old('name') }}" name="name">
                        @error('name')
                            <p class="fs-6 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 apellido">
                        <label for="apellido" class="form-label apellido">Apellidos</label>
                        <input type="text" class="form-control form-control-lg @error('apellido') border-danger  @enderror " id="apellido"
                            placeholder="Ingresa tus apellidos" name="apellido" value="{{ old('apellido') }}">
                        @error('apellido')
                            <p class="fs-6  text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 username">
                        <label for="username" class="form-label username">Username</label>
                        <input type="text" class="form-control form-control-lg @error('username') border-danger  @enderror " id="username"
                            placeholder="Crea un Username" name="username" value="{{ old('username') }}">
                        @error('username')
                            <p class="fs-6 alert text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 fecha">
                        <label for="fechaNacimiento" class="form-label fecha">Fecha de Nacimiento</label>
                        <input type="date" class="form-control form-control-lg @error('fechaNacimiento') border-danger  @enderror " id="fechaNacimiento"
                            name="fechaNacimiento" max="{{ date('Y-m-d', strtotime('-18 years')) }}" value="{{ old('fechaNacimiento') }}">
                        @error('fechaNacimiento')
                            <p class="fs-6 alert text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 email">
                        <label for="email" class="form-label email">E-mail</label>
                        <input type="text" class="form-control form-control-lg @error('email') border-danger  @enderror" id="email"
                            placeholder="Ingresa tu E-mail" name="email"  value="{{ old('email') }}">
                        @error('email')
                            <p class="fs-6 alert text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3 pass">
                        <label for="password" class="form-label pass">Contraseña</label>
                        <input type="password" class="form-control form-control-lg @error('password') border-danger  @enderror" id="password"
                            placeholder="Ingresa tu Contraseña" name="password">
                        @error('password')
                            <p class="fs-6 alert text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5 confirPass">
                        <label for="password_confirmation" class="form-label confirPass">Confirmar Contraseña</label>
                        <input type="password" class="form-control form-control-lg @error('password_confirmation') border-danger  @enderror " id="password_confirmation"
                            placeholder="Confirma tu Contraseña" name="password_confirmation">
                            @error('password_confirmation')
                            <p class="fs-6 alert text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check mb-3 cheks1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name="checkboxes[]">
                        <label class="form-check-label acuerdos" for="flexCheckIndeterminate">
                            Acepto los <a href="#">Terminos y Condiciones</a>
                        </label>
                        @error('checkboxes')
                        <p class="fs-6 alert text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="form-check mb-3 cheks2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name="checkboxes[]">
                        <label class="form-check-label acuerdos" for="flexCheckIndeterminate">
                            Acecto la <a href="#">Politica de Privacidad</a>
                        </label>
                        @error('checkboxes')
                        <p class="fs-6 alert text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="mt-5 botones-register">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrate">
                        <a href="{{ route('login-google') }}"
                            class="btn-google d-flex justify-content-center gap-3 align-items-center ">
                            <img src="{{ 'img/google.png' }}" alt="icono de google" width="25px">
                            <span>Registrate con Google</span>
                        </a>
                    </div>


                </form>
            </div>
        </div>


    </div>

</body>

</html>
