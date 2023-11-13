@extends('layouts.app')

@section('Titulo')
    Configuracion
@endsection


@section('contenido')
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- User Info -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                <div class="pt-8 rounded-top-md foto-portada rounded"
                    style="background: url({{ asset('img/bg-portada.jpg') }}) no-repeat; background-size: cover; "></div>
                <div
                    class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5 ">
                            <img src="{{ asset('img/fotoPerfil.jpg') }}"
                                class="avatar-xl rounded-circle border border-4 border-white" alt="" height="80"
                                width="80">
                        </div>
                        <div class="lh-1">
                            <h2 class="mb-0">{{ auth()->user()->name }} {{ auth()->user()->apellido }}</h2>
                            <p class="mb-0 d-block">{{ auth()->user()->username }}</p>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-sm d-none d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="container-fluid">
        <div class="container mt-0 mt-lg-5 rounded mb-4 ">

            <div class=" col-12  bg-blanco p-3 sombra d-flex justify-content-between align-items-center d-lg-none">
                <h3 class="p-0 m-0">Configuracion</h3>
                <button class="btn bg-primario text-ligth" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions2" aria-controls="offcanvasWithBothOptions"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-list text-light " viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg></button>
            </div>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions2"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header p-5">

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <section class=" menu   bg-blanco  h-auto p-5  d-flex flex-column gap-3   ">
                        <span class=" text-uppercase ">Suscripción</span>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#" id="mi-suscripcion">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                                Mi Suscripción</a>
                            <a href="#" id="pagos">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                </svg>
                                Pagos</a>
                            <a href="#" id="facturas">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-receipt" viewBox="0 0 16 16">
                                    <path
                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                    <path
                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                Facturas</a>
                        </nav>

                        <span>CONFIGURACION</span>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#" id="perfil"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>Perfil</a>

                            <a href="#" id="seguridad"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                    <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                    <path
                                        d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                                </svg>Seguridad</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="btn bg-danger text-light d-flex gap-3 justify-content-center align-items-center "><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg>Cerrar Sesión</button>
                            </form>

                        </nav>
                    </section>
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="col container  d-lg-flex justify-content-between gap-3  h-100">
                    <section class=" menu sombra d-none bg-blanco h-100 p-5  d-lg-flex flex-column gap-3   ">
                        <span class=" text-uppercase ">Suscripción</span>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#" id="mi-suscripcion">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                                Mi Suscripción</a>
                            <a href="#" id="pagos">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                </svg>
                                Pagos</a>
                            <a href="#" id="facturas">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-receipt" viewBox="0 0 16 16">
                                    <path
                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                    <path
                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                Facturas</a>
                        </nav>

                        <span>CONFIGURACION</span>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#" id="perfil2"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>Perfil</a>

                            <a href="#" id="seguridad2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                    <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                    <path
                                        d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                                </svg>Seguridad</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="btn bg-danger text-light d-flex gap-3 justify-content-center align-items-center "><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg>Cerrar Sesión</button>
                            </form>

                        </nav>
                    </section>
                    <div class=" col-12 col-lg-9 h-25 bg-blanco border p-4 sombra  " id="vista-MiSuscripcion">
                        <div class="row d-flex align-md-items-center container flex-md-row flex-column  ">
                            <div class="col-12 col-md-6">
                                <h3 class=" fw-semibold m-0">Mi Suscripcion</h3>
                                <p class="mt-1">Aqui puedes ver los detalles de tu suscripcion</p>
                            </div>
                            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">
                                <p class=" fw-semibold ">Tu Suscripcion actual es:</p>
                                <p class=" h3 badge bg-primario m-0">Anual</p>
                            </div>
                            <hr class="mt-3 w-100 ">
                        </div>

                        <div class="row p-4 d-flex justify-content-between align-items-center gap-5 gap-md-0 gap-lg-0  ">
                            <div class="col-12 col-md-6 col-lg-3 ">
                                <div class="d-flex align-items-center  gap-4">
                                    <h3 class="m-0 fw-semibold ">Anual</h3> <span
                                        class="h6 badge bg-success ">Activo</span>
                                </div>
                                <p class=" h4 fw-light mt-1 ">Suscripcion ID <span>#001125</span></p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3  ">
                                <div class=" d-flex flex-column align-items-md-center  ">
                                    <p>Renovar Automaticamente</p>
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input " type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-3 text-lg-end mt-md-5 text-md-center ">
                                <a href="#"
                                    class="p-3 border border-info text-black rounded fw-semibold pointer-event"> Cambiar
                                    Plan</a>
                            </div>
                        </div>
                        <div class="row m-5  ">
                            <div class="col-12 col-md-6 col-lg-3 item-price">
                                <span class=" fw-light text-secundary">Fecha de Inicio</span>
                                <p class="fw-semibold">Nov 11, 2023</p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 mt-lg-0 mt-3 item-price">
                                <span class=" fw-light text-secundary">Tipo</span>
                                <p class="fw-semibold">Plan Anual</p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 mt-lg-0 mt-3 item-price">
                                <span class=" fw-light text-secundary">Precio</span>
                                <p class="fw-semibold">$1,000 MXN</p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 mt-lg-0 mt-3 item-price">
                                <span class=" fw-light text-secundary">Fecha de Renovacion</span>
                                <p class="fw-semibold">Nov 11, 2024</p>
                            </div>
                        </div>
                        <hr class="mt-3 w-100  mt-5 ">
                        <div class="row">
                            <div class=" container text-center mt-5 w-75">
                                <h2 class=" m-0 fw-semibold">Precios</h2>
                                <p class="mb-5">¿Listo para llevar tu aprendizaje al siguiente nivel? Ofrecemos tres
                                    emocionantes opciones de
                                    suscripción, cada una diseñada para satisfacer tus necesidades educativas de manera
                                    única</p>

                                <div class="contenedor-paqutes d-flex flex-column flex-md-row flex-md-wrap ">
                                    <div
                                        class="card-paquete basico d-flex flex-column gap-3 justify-content-between shadow  order-2 order-lg-0">
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

                                    <div
                                        class="card-paquete completo d-flex flex-column gap-3 justify-content-between shadow order-1">
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
                                    <div
                                        class="card-paquete basico d-flex flex-column gap-3 justify-content-between shadow order-3">
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
                        </div>

                    </div>
                    <div class=" col-12 col-lg-9 h-25 bg-blanco border p-4 sombra d-none " id="vista-pagos">
                        <div class="row">
                            <div class="col">
                                <h3 class="m-0 fw-semibold ">Metodos de pago</h3>
                                <p class="mt-1">Modifica las tarjetas o el metrodo de pago para tu suscripcion.</p>
                            </div>
                        </div>
                        <div class="row mt-5 container justify-content-end ">
                            <hr>
                            <div class="col d-flex justify-content-start align-items-center gap-3">
                                <img src="{{ asset('img/visa.png') }}" alt="logo de tarjeta" width="50">
                                <div class="">
                                    <p class=" fw-semibold h4 m-0">Visa Credito</p>
                                    <span class=" fw-light  h5 m-0">Expira 10/25</span>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end  align-items-center ">
                                <p class="badge bg-success ">Primaria</p>
                                <div class="btn-group dropstart">
                                    <button type="button" class=" border-0 bg-blanco" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu config">
                                        <!-- Dropdown menu links -->
                                        <div class="d-flex flex-column gap-2">
                                            <p class=" text-uppercase ">Configuracion</p>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>Editar</a>

                                        </div>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>Eliminar</a>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                                            </svg>Hacer Principal</a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 container justify-content-end ">
                            <hr>
                            <div class="col d-flex justify-content-start align-items-center gap-3">
                                <img src="{{ asset('img/mastercard.png') }}" alt="logo de tarjeta" width="50">
                                <div class="">
                                    <p class=" fw-semibold h4 m-0">MasterCard Credito</p>
                                    <span class=" fw-light  h5 m-0">Expira 10/25</span>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end  align-items-center ">

                                <div class="btn-group dropstart">
                                    <button type="button" class=" border-0 bg-blanco" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu config">
                                        <!-- Dropdown menu links -->
                                        <div class="d-flex flex-column gap-2">
                                            <p class=" text-uppercase ">Configuracion</p>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>Editar</a>

                                        </div>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>Eliminar</a>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                                            </svg>Hacer Principal</a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 container justify-content-end ">
                            <hr>
                            <div class="col d-flex justify-content-start align-items-center gap-3">
                                <img src="{{ asset('img/american-express.png') }}" alt="logo de tarjeta" width="50">
                                <div class="">
                                    <p class=" fw-semibold h4 m-0">American Express Credito</p>
                                    <span class=" fw-light  h5 m-0">Expira 10/25</span>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end  align-items-center ">

                                <div class="btn-group dropstart">
                                    <button type="button" class=" border-0 bg-blanco" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu config">
                                        <!-- Dropdown menu links -->
                                        <div class="d-flex flex-column gap-2">
                                            <p class=" text-uppercase ">Configuracion</p>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>Editar</a>

                                        </div>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-trash"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>Eliminar</a>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                                            </svg>Hacer Principal</a>

                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-5 container justify-content-end ">
                                <hr>
                                <div class="col d-flex justify-content-start align-items-center gap-3">
                                    <img src="{{ asset('img/paypal.png') }}" alt="logo de tarjeta" width="50">
                                    <div class="">
                                        <p class=" fw-semibold h4 m-0">PayPal</p>
                                        <span class=" fw-light  h5 m-0">Expira 10/25</span>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end  align-items-center ">

                                    <div class="btn-group dropstart">
                                        <button type="button" class=" border-0 bg-blanco" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-three-dots-vertical"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu config">
                                            <!-- Dropdown menu links -->
                                            <div class="d-flex flex-column gap-2">
                                                <p class=" text-uppercase ">Configuracion</p>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>Editar</a>

                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg>Eliminar</a>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                                                </svg>Hacer Principal</a>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-lg-9 h-25 bg-blanco border p-4 sombra container-fluid d-none" id="vista-facturas">
                        <div class="row">
                            <div class="col">
                                <h3>Facturas</h3>
                                <p>Aqui puedes consultar tus facturas y descargarlas</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <table class="w-100 text-center ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha</th>
                                            <th>Cantidad</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr >
                                            <td class="text-start fw-semibold h4 text-info  ">#55458</td>
                                            <td class="text-start text-secondary ">Nov 11, 2021</td>
                                            <td class="text-start">$1000 MXN</td>
                                            <td class="text-start">
                                                <span class="badge bg-warning">In progress</span>
                                            </td>
                                            <td class="text-start">
                                                <a href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-box-arrow-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z" />
                                                    </svg>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-start fw-semibold h4 text-info  ">#55458</td>
                                            <td class="text-start text-secondary ">Nov 11, 2021</td>
                                            <td class="text-start">$1000 MXN</td>
                                            <td class="text-start">
                                                <span class="badge bg-success">Pagado</span>
                                            </td>
                                            <td class="text-start">
                                                <a href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-box-arrow-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z" />
                                                    </svg>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="text-start fw-semibold h4 text-info  ">#55458</td>
                                            <td class="text-start text-secondary ">Nov 11, 2021</td>
                                            <td class="text-start">$1000 MXN</td>
                                            <td class="text-start">
                                                <span class="badge bg-danger">Cancelado</span>
                                            </td>
                                            <td class="text-start">
                                                <a href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-box-arrow-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z" />
                                                    </svg>
                                                </a>

                                            </td>
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-9 h-25  d-none" id="vista-perfil2">
                        <div class="container  bg-blanco p-5 sombra ">
                            <div class="row border-bottom p-3">
                                <div class="col ">
                                    <h3 class="fw-semibold mb-2">Editar Perfil</h3>
                                    <p>Modifica detalles de tu cuenta</p>
                                </div>
                            </div>
                            <div class="row border-bottom p-5 d-flex justify-content-between align-items-center w-100">
                                <div class="col d-flex justify-content-start align-items-center gap-3  ">
                                    <img src="{{ asset('img/foto-perfilM.jpg') }}" alt="Foto perfil"
                                        class="border rounded-circle" width="100" height="100">
                                    <div class="w-100">
                                        <p class="fw-semibold">Tu foto de perfil</p>
                                        <span class="h4text-black-50 ">PNG o JPG no mayor a 800px de tamaño</span>
                                    </div>
                                </div>
                                <form action="" class="col text-end ">
                                    <button class="btn bg-primario text-light">Actualizar</button>
                                </form>
                            </div>
                            <div class="row border-bottom p-5  ">
                                <h3 class="fw-semibold mb-2">Informacion Personal</h3>
                                <p>Edita tu informacion personal.</p>
    
                                <form class="formulario-perfil row mt-5  ">
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="fname">Nombre</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="lname">Apellidos</label>
                                        <input type="text" id="lname" class="form-control"
                                            placeholder="Last Name" required>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
    
                                        <label class="form-label" for="lname">Username</label>
                                        <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                                placeholder="Username">
                                        </div>
    
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label">Genero</label>
                                        <select class="form-select" data-width="100%">
                                            <option value="" selected disabled>--selecciona--</option>
                                            <option value="1">Hombre</option>
                                            <option value="2">Mujer</option>
                                            <option value="3">Otro</option>
                                        </select>
                                    </div>
    
                                    <div class="mb-3 col-12 col-md-12">
    
                                        <label for="exampleFormControlTextarea1" class="form-label">Acerca de mi.</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Agrega información sobre ti para tus CleanKoders."></textarea>
    
                                    </div>
                                  
                                    <div class="mt-3 col-12 col-md-12 text-end">
                                        <button type="submit" class="btn bg-primario text-light">Actualizar</button>
                                    </div>
    
                                </form>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 h-25 d-none  " id="vista-seguridad2">
                        <div class="container  bg-blanco p-5 sombra ">
                            <div class="row border-bottom p-3">
                                <div class="col ">
                                    <h3 class="fw-semibold mb-2">Seguridad.</h3>
                                    <p>Modifica tus credenciales para ingresar</p>
                                </div>
                            </div>
                            <div class="row border-bottom p-3">
                                <h3 class="fw-semibold">Correo electronico</h3>
                                <p class="mb-3">Actualmente tu correo es: <span
                                        class="text-primary">{{ auth()->user()->email }}</span></p>
                                <form action="" class="row formulario-perfil">
                                    <div class="mb-3 col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label fw-semibold">Nuevo Correo
                                                Electronico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
    
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn bg-primario text-light">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="row border-bottom p-3">
                                <h3 class="fw-semibold">Cambiar tu contraseña</h3>
                                <p class="mb-3">Puedes cambiar tu contraseña</p>
                                <form action="" class="row formulario-perfil">
                                    <div class="mb-3">
                                        <label for="inputPassword5" class="form-label">Tu contraseña anterior</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock" name="holdPassword">
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="inputPassword5" class="form-label">Nueva contraseña</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock">
                                        <div id="passwordHelpBlock" class="form-text">
                                            Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y debe
                                            no contener espacios, caracteres especiales ni emoji.
                                        </div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="inputPassword5" class="form-label">Confirmar contraseña</label>
                                        <input type="password"
                                            class="form-control form-control-lg @error('password_confirmation') border-danger  @enderror "
                                            id="password_confirmation" name="password_confirmation">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn bg-primario text-light">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
