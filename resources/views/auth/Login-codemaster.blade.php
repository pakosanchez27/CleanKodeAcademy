<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
    <title>CleanKode Academy | Login</title>
    @vite('resources/css/app.scss')
</head>

<body>
    <div class="container-fluid  d-flex justify-content-center align-items-center contenedor ">
        <div class="container bg-light contenedor-login d-flex flex-column gap-5 justify-content-center shadow ">
            <a href="/" class="logo text-black ">
                <img src="{{ asset('img/logo.png') }}" alt="Login-logo">
                <p class="fw-bold">CleanKode <span>Academy</span></p>
            </a>
            <div class="texto-login">
                <p class="fw-bold">Iniciar Sesión CodeMaster</p>
                <p>Ingresa tus datos para iniciar sesión</p>
                
            </div>
            @if (session('mensaje'))
                <p class="alert alert-danger m-0 p-2">{{session('mensaje')}}</p>
                @endif
           
            <form action="{{ route('login-codemaster') }}" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="correo@cleankode.com" name="email">
                    @error('email')
                        <p class="fs-6 text-danger m-0">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control"
                        aria-describedby="passwordHelpBlock" name="password">
                    @error('password')
                        <p class="fs-6 text-danger m-0 ">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </div>
                <div class="mb-3">
                    <p class="text-center">¿Olvidaste tu contraseña? <a
                            href="mailto:admin@cleankode.com?subject=Restablecimiento de contraseña">Contacta el
                            administrador</a></p>
            </form>
            <p class="mt-2 fw-light text-center">Si estas buscando cursos <a href="{{route('login')}}">Da click aquí</a></p>
        </div>
    </div>
</body>

</html>
