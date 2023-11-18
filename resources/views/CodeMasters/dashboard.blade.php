@extends('layouts.app')

@section('Titulo')
    Inicio
@endsection


@if(session('success'))

<div class="toast fade show  Notificacion sombra p-3  " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header Notifi-exito">
      <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%"></rect></svg>
      <strong class="me-auto h4">Notificación</strong>
     
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
       <p>{{ session('success') }}</p>
    </div>
  </div>
  
@endif

@if(session('error'))

<div class="toast fade show  Notificacion sombra p-3  " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header Notifi-error">
      <svg class="bd-placeholder-img rounded me-2 " width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" ></rect></svg>
      <strong class="me-auto h4">Notificación</strong>
     
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
       <p>{{ session('error') }}</p>
    </div>
  </div>
  
@endif



@section('contenido')
    


    <div class="container-fluid">
        <section class="container portada-master mt-3 sombra">
            <div class="row row fondoPortada p-3">
                <div class="col-6 d-flex justify-content-center align-items-center ">
                    <h2 class="text-center  text-light fw-semibold ">Bienvenido a CodeMasters</h2>
                </div>
            </div>
            <div
                class="row texto-portada rounded col-6  d-flex flex-column flex-md-row justify-content-md-between align-items-md-center  bg-blanco p-3 w-auto ">
                <div class="col-8 d-flex align-items-center gap-3    ">
                    <img src="{{ asset('img/foto-perfilM.jpg') }}" alt="Foto perfil" class="border fotoPerfilPortada">
                    <div class=" ">
                        <h2 class="m-0 fw-semibold  ">Francisco Sánchez</h2>
                        <p class="m-0 fw-light fst-italic ">Master-Francisco</p>
                    </div>

                </div>
                <div class="col-4 w-auto ">
                    <a href="{{ route('newCurso.index') }}" class="btn btn-primary mt-3 mt-md-0 btn-crear">Crear Curso</a>
                </div>
            </div>
        </section>
        <div class="container mt-0 mt-lg-5 rounded mb-4  ">
            <div class="row  ">
                <div class="d-flex d-lg-none justify-content-between align-items-center bg-blanco p-3 sombra rounded ">
                    <h3>Menú</h3>
                    <button class="btn btn-primary p-3 h-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img width="20px"
                            src="{{ asset('img/menu.png') }}" alt="icono menu"></button>
                </div>

                <div class="offcanvas offcanvas-start bg-body-tertiary " data-bs-scroll="true" data-bs-backdrop="false"
                    tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header ">
                        <a href="{{ route('Master.index') }}" class="logo text-black ">
                            <img src="{{ asset('img/logo.png') }}" alt="Login-logo">
                            <p class="fw-bold">CleanKode <span>Academy</span></p>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body menu ">
                        <span>DASHBOARD</span>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#" id="dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                </svg></i>Dashboard</a>
                            <a href="#" id="mis-cursos"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path
                                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>Mis Cursos</a>
                            <a href="#" id="mis-cleankoders"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-backpack" viewBox="0 0 16 16">
                                    <path
                                        d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14ZM4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z" />
                                    <path
                                        d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v5.5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5V8a6.002 6.002 0 0 1 4-5.659ZM7 2v.083a6.04 6.04 0 0 1 2 0V2a1 1 0 0 0-2 0Zm1 1a5 5 0 0 0-5 5v5.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5Z" />
                                </svg>
                                </svg>Mis Cleankoders</a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                </svg>
                                </svg>Comentarios</a>
                            <a href="#" id="ingresos"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                    <path
                                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                </svg>
                                </svg>Ingresos</a>


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
                    </div>
                </div>

                <div class="col-3  container d-none d-lg-flex  h-100">
                    <section class=" menu sombra  bg-blanco  h-auto p-5  d-flex flex-column gap-3   ">
                        <span>DASHBOARD</span>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#" id="dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                </svg></i>Dashboard</a>
                            <a href="#" id="mis-cursos"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path
                                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>Mis Cursos</a>
                            <a href="#" id="mis-cleankoders"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-backpack"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14ZM4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z" />
                                    <path
                                        d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v5.5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5V8a6.002 6.002 0 0 1 4-5.659ZM7 2v.083a6.04 6.04 0 0 1 2 0V2a1 1 0 0 0-2 0Zm1 1a5 5 0 0 0-5 5v5.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5Z" />
                                </svg>
                                </svg>Mis Cleankoders</a>
                            <a href="#" id="comentarios"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                </svg>
                                </svg>Comentarios</a>
                            <a href="#" id="ingresos"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                    <path
                                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                </svg>
                                </svg>Ingresos</a>


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

                <div class="card-estudiantes col-12 col-lg-9 h-25   " id="vista-dashboard">
                    <section class="contenido ">
                        <div class="row ">
                            <div class="col-lg-4 col-md-12 col-12  ">
                                <!-- Card -->
                                <div class="card mb-4 h-auto">
                                    <div class="p-4">
                                        <span class="fs-6 text-uppercase fw-semibold">Ganacias</span>
                                        <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                            $467.34
                                        </h2>
                                        <span class="d-flex justify-content-between align-items-center">
                                            <span>Último mes</span>
                                            <span class="badge bg-success ms-2">$2030.23</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12">
                                <!-- Card -->
                                <div class="card mb-4 h-auto">
                                    <div class="p-4">
                                        <span class="fs-6 text-uppercase fw-semibold">Cleankoders Inscritos</span>
                                        <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                            12,000
                                        </h2>
                                        <span class="d-flex justify-content-between align-items-center">
                                            <span>Último mes</span>
                                            <span class="badge bg-info ms-2">120+</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12">
                                <!-- Card -->
                                <div class="card mb-4 h-auto">
                                    <div class="p-4">
                                        <span class="fs-6 text-uppercase fw-semibold">Valoracion</span>
                                        <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                            4.80
                                        </h2>
                                        <span class="d-flex justify-content-between align-items-center">
                                            <span>Último mes</span>
                                            <span class="badge bg-warning ms-2">10+</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table bg-blanco sombra">
                            <div class=" ">
                                <h3 class="fw-semibold m-0 p-4  ">Mis Cursos</h3>
                            </div>
                            <table class="w-100 ">
                                <thead>
                                    <tr>
                                        <th class="text-center">Curso</th>
                                        <th></th>
                                        <th>Fecha de creacion</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     
                                    @foreach ($resultados as $resultado)
                                        <tr>
                                            <td>
                                                <img class="rounded"
                                                    src="{{ asset('storage/images/' . $resultado->FotoCurso) }}"
                                                  
                                                    alt="Imagen del curso" width="80px">
                                                    
                                                
                                            </td>
                                            <td class="fw-semibold text-start ">{{ $resultado->nombreCurso }}</td>
                                            <td class="text-start ">
                                                {{ $fechaFormat = date('d-m-Y', strtotime($resultado->created_at)) }}</td>
                                            <td class="text-start">


                                                @if ($resultado->estado == 1)
                                                    <span class="badge bg-success">Activo</span>
                                                @elseif ($resultado->estado == 2)
                                                    <span class="badge bg-warning">Pendiente</span>
                                                @else
                                                    <span class="badge bg-info">En proceso</span>
                                                @endif

                                            </td>
                                            <td>
                                                <div class="btn-group dropstart">
                                                    <button type="button" class="border-0 bg-blanco"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                            <path
                                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu config">
                                                        <!-- Dropdown menu links -->
                                                        <div class="d-flex flex-column gap-2">
                                                            <p class=" text-uppercase ">Configuracion</p>
                                                            <a
                                                                href="{{ route('newCurso.index', ['modo' => 'update', 'idCurso' => $resultado->idCurso]) }}"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                </svg>Editar</a>
                                                            <a href="{{route('clases.index', ['idCurso' => $resultado->idCurso])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                                              </svg>Clases</a>
                                                        </div>
                                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                <path
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                            </svg>Eliminar</a>

                                                    </ul>
                                                </div>


                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>

                <div class="card-estudiantes col-12 col-lg-9 h-25  d-none  " id="vista-misCursos">
                    <div class="table bg-blanco sombra m-0 ">
                        <div class=" ">
                            <h3 class="fw-semibold m-0 p-4  ">Mis Cursos</h3>
                        </div>
                        <table class="w-100 ">
                            <thead>
                                <tr>
                                    <th class="text-center">Curso</th>
                                    <th></th>
                                    <th>CleanKoders</th>
                                    <th>Valoracion</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="rounded" src="{{ asset('img/bg-java.png') }}" alt="Imagen del curso"
                                            width="80px"></td>
                                    <td class="fw-semibold text-start  nombre-time ">


                                        <p>Curso de Java</p>
                                        <div class="d-flex gap-2 d-flex flex-column flex-md-row   ">
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-alarm"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                                </svg> 1h 30m</span>
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-journal-text"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                    <path
                                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                    <path
                                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                </svg>24 clases</span>
                                        </div>


                                    </td>
                                    <td class="text-start ">12,000</td>
                                    <td class=" text-center valoracion ">
                                        <p>4.5 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg><span> (2,255) </span></p>

                                    </td>
                                    <td class="text-start">
                                        <span class="badge bg-success">Activo</span>
                                    </td>

                                    <td>
                                        <div class="btn-group dropstart">
                                            <button type="button" class="border-0 bg-blanco" data-bs-toggle="dropdown"
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
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>Editar</a>
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                                      </svg>Clases</a>
                                                </div>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg>Eliminar</a>

                                            </ul>
                                        </div>


                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="rounded" src="{{ asset('img/bg-java.png') }}" alt="Imagen del curso"
                                            width="80px"></td>
                                    <td class="fw-semibold text-start  nombre-time ">


                                        <p>Curso de Java</p>
                                        <div class="d-flex gap-2 d-flex flex-column flex-md-row   ">
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-alarm"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                                </svg> 1h 30m</span>
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-journal-text"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                    <path
                                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                    <path
                                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                </svg>24 clases</span>
                                        </div>


                                    </td>
                                    <td class="text-start ">12,000</td>
                                    <td class=" text-center valoracion ">
                                        <p>4.5 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg><span> (2,255) </span></p>

                                    </td>
                                    <td class="text-start">
                                        <span class="badge bg-success">Activo</span>
                                    </td>

                                    <td>
                                        <div class="btn-group dropstart">
                                            <button type="button" class="border-0 bg-blanco" data-bs-toggle="dropdown"
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
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>Editar</a>
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-book" viewBox="0 0 16 16">
                                                            <path
                                                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                                        </svg>Clases</a>
                                                </div>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg>Eliminar</a>

                                            </ul>
                                        </div>


                                    </td>
                                </tr>

                                <tr>
                                    <td><img class="rounded" src="{{ asset('img/bg-java.png') }}" alt="Imagen del curso"
                                            width="80px"></td>
                                    <td class="fw-semibold text-start  nombre-time ">


                                        <p>Curso de Java</p>
                                        <div class="d-flex gap-2 d-flex flex-column flex-md-row   ">
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-alarm"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                                </svg> 1h 30m</span>
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-journal-text"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                    <path
                                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                    <path
                                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                </svg>24 clases</span>
                                        </div>


                                    </td>
                                    <td class="text-start ">12,000</td>
                                    <td class=" text-center valoracion ">
                                        <p>4.5 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg><span> (2,255) </span></p>

                                    </td>
                                    <td class="text-start">
                                        <span class="badge bg-success">Activo</span>
                                    </td>

                                    <td>
                                        <div class="btn-group dropstart">
                                            <button type="button" class="border-0 bg-blanco" data-bs-toggle="dropdown"
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
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>Editar</a>
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                                        </svg>Bajar</a>
                                                </div>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg>Eliminar</a>

                                            </ul>
                                        </div>


                                    </td>
                                </tr>

                                <tr>
                                    <td><img class="rounded" src="{{ asset('img/bg-java.png') }}" alt="Imagen del curso"
                                            width="80px"></td>
                                    <td class="fw-semibold text-start  nombre-time ">


                                        <p>Curso de Java</p>
                                        <div class="d-flex gap-2 d-flex flex-column flex-md-row   ">
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-alarm"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                                    <path
                                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                                </svg> 1h 30m</span>
                                            <span class="mx-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-journal-text"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                    <path
                                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                    <path
                                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                </svg>24 clases</span>
                                        </div>


                                    </td>
                                    <td class="text-start ">12,000</td>
                                    <td class=" text-center valoracion ">
                                        <p>4.5 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg><span> (2,255) </span></p>

                                    </td>
                                    <td class="text-start">
                                        <span class="badge bg-success">Activo</span>
                                    </td>

                                    <td>
                                        <div class="btn-group dropstart">
                                            <button type="button" class="border-0 bg-blanco" data-bs-toggle="dropdown"
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
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>Editar</a>
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                                        </svg>Bajar</a>
                                                </div>
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg>Eliminar</a>

                                            </ul>
                                        </div>


                                    </td>
                                </tr>




                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-estudiantes col-12 col-lg-9 h-25 d-none " id="vista-cleankoders">
                    <div class="container d-flex flex-wrap ">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 h-auto rounded ">
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img src="{{ asset('img/perfil1.jpg') }}" width="100px" height="100px"
                                            class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-1 fw-semibold ">Wade Warren</h4>
                                        <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i> username</p>

                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                                        <span>Enrolled</span>
                                        <span class="text-dark"> 3/12/2020</span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2 fs-6 border-bottom">
                                        <span>Curso</span>
                                        <span class="fw-semibold"> Fundamentos de Programacion </span>
                                    </div>

                                    <div class="d-flex justify-content-between pt-2 fs-6">
                                        <span>Progress</span>
                                        <span class="text-success"> 40% </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 h-auto rounded ">
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img src="{{ asset('img/perfil2.jpg') }}" width="100px" height="100px"
                                            class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-1 fw-semibold ">Wade Warren</h4>
                                        <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i> username</p>

                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                                        <span>Enrolled</span>
                                        <span class="text-dark"> 3/12/2020</span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2 fs-6 border-bottom">
                                        <span>Curso</span>
                                        <span class="fw-semibold"> Fundamentos de Programacion </span>
                                    </div>

                                    <div class="d-flex justify-content-between pt-2 fs-6">
                                        <span>Progress</span>
                                        <span class="text-success"> 40% </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 h-auto rounded ">
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img src="{{ asset('img/perfil3.jpg') }}" width="100px" height="100px"
                                            class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-1 fw-semibold ">Wade Warren</h4>
                                        <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i> username</p>

                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                                        <span>Enrolled</span>
                                        <span class="text-dark"> 3/12/2020</span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2 fs-6 border-bottom">
                                        <span>Curso</span>
                                        <span class="fw-semibold"> Fundamentos de Programacion </span>
                                    </div>

                                    <div class="d-flex justify-content-between pt-2 fs-6">
                                        <span>Progress</span>
                                        <span class="text-success"> 40% </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 h-auto rounded ">
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img src="{{ asset('img/perfil4.jpg') }}" width="100px" height="100px"
                                            class="rounded-circle avatar-xl mb-3" alt="">
                                        <h4 class="mb-1 fw-semibold ">Wade Warren</h4>
                                        <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i> username</p>

                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                                        <span>Enrolled</span>
                                        <span class="text-dark"> 3/12/2020</span>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2 fs-6 border-bottom">
                                        <span>Curso</span>
                                        <span class="fw-semibold"> Fundamentos de Programacion </span>
                                    </div>

                                    <div class="d-flex justify-content-between pt-2 fs-6">
                                        <span>Progress</span>
                                        <span class="text-success"> 40% </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>

                <div class="col-12 col-lg-9 h-25 d-none " id="vista-comentarios">
                    <div class=" mb-4">
                        <!-- Card header -->
                        <div class="card-header d-lg-flex align-items-center justify-content-between bg-blanco p-5">
                            <div class="mb-3 mb-lg-0">
                                <h3 class="mb-0 fw-semibold ">Comentarios</h3>

                            </div>

                        </div>
                        <!-- Card body -->
                        <div class="card-body">

                            <!-- List group -->
                            <ul class="list-group list-group-flush border-top ">
                                <!-- List group item -->
                                <li class="list-group-item px-5 py-5 ">
                                    <div class="d-flex">
                                        <img src="{{ asset('img/perfil1.jpg') }}" alt="" width="80"
                                            height="80" class="rounded-circle avatar-lg" />
                                        <div class="ms-3 mt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0 fw-semibold">Juan Peña</h4>
                                                    <span class=" fs-6">Hace 2 horas </span>
                                                </div>
                                                <div>
                                                    <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                        title="Report Abuse"><i class="fe fe-flag"></i></a>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <span class="me-1 fs-6 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </span>
                                                <span class="h5 fw-semibold ">Fundamentos de programacion</span>

                                                <p class="mt-2 mb-3">
                                                    El curso es muy interesante y
                                                    perspicaz. Creo que debería tener más
                                                    recursos descargables para 'puntos a
                                                    recordar" o "aprendizajes clave"
                                                    documento para referencia posterior después
                                                    terminando cada sección.
                                                </p>
                                                <a href="#"
                                                    class="btn btn-outline-secondary btn-sm text-light ">Responder</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item px-5 py-5 ">
                                    <div class="d-flex">
                                        <img src="{{ asset('img/perfil2.jpg') }}" alt="" width="80"
                                            height="80" class="rounded-circle avatar-lg" />
                                        <div class="ms-3 mt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0 fw-semibold">Juan Peña</h4>
                                                    <span class=" fs-6">Hace 2 horas </span>
                                                </div>
                                                <div>
                                                    <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                        title="Report Abuse"><i class="fe fe-flag"></i></a>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <span class="me-1 fs-6 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </span>
                                                <span class="h5 fw-semibold ">Fundamentos de programacion</span>

                                                <p class="mt-2 mb-3">
                                                    El curso es muy interesante y
                                                    perspicaz. Creo que debería tener más
                                                    recursos descargables para 'puntos a
                                                    recordar" o "aprendizajes clave"
                                                    documento para referencia posterior después
                                                    terminando cada sección.
                                                </p>
                                                <a href="#"
                                                    class="btn btn-outline-secondary btn-sm text-light ">Responder</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item px-5 py-5 ">
                                    <div class="d-flex">
                                        <img src="{{ asset('img/perfil3.jpg') }}" alt="" width="80"
                                            height="80" class="rounded-circle avatar-lg" />
                                        <div class="ms-3 mt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0 fw-semibold">Juan Peña</h4>
                                                    <span class=" fs-6">Hace 2 horas </span>
                                                </div>
                                                <div>
                                                    <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                        title="Report Abuse"><i class="fe fe-flag"></i></a>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <span class="me-1 fs-6 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </span>
                                                <span class="h5 fw-semibold ">Fundamentos de programacion</span>

                                                <p class="mt-2 mb-3">
                                                    El curso es muy interesante y
                                                    perspicaz. Creo que debería tener más
                                                    recursos descargables para 'puntos a
                                                    recordar" o "aprendizajes clave"
                                                    documento para referencia posterior después
                                                    terminando cada sección.
                                                </p>
                                                <a href="#"
                                                    class="btn btn-outline-secondary btn-sm text-light ">Responder</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item px-5 py-5 ">
                                    <div class="d-flex">
                                        <img src="{{ asset('img/perfil5.jpg') }}" alt="" width="80"
                                            height="80" class="rounded-circle avatar-lg" />
                                        <div class="ms-3 mt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0 fw-semibold">Juan Peña</h4>
                                                    <span class=" fs-6">Hace 2 horas </span>
                                                </div>
                                                <div>
                                                    <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                        title="Report Abuse"><i class="fe fe-flag"></i></a>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <span class="me-1 fs-6 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        fill="currentColor" class="bi bi-star-fill text-warning"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </span>
                                                <span class="h5 fw-semibold ">Fundamentos de programacion</span>

                                                <p class="mt-2 mb-3">
                                                    El curso es muy interesante y
                                                    perspicaz. Creo que debería tener más
                                                    recursos descargables para 'puntos a
                                                    recordar" o "aprendizajes clave"
                                                    documento para referencia posterior después
                                                    terminando cada sección.
                                                </p>
                                                <a href="#"
                                                    class="btn btn-outline-secondary btn-sm text-light ">Responder</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9 h-25 d-none " id="vista-ingresos">
                    <div class="p-4 bg-blanco sombra mt-3 ">
                        <h2>Recibos de Nomina</h2>
                        <form action=""
                            class="d-flex justify-content-between align-items-center gap-3 nomina-buscador ">
                            <select id="duracion" class="form-select" aria-label="Duración">
                                <option value="30">30 días</option>
                                <option value="60">2 meses</option>
                                <option value="180">6 meses</option>
                            </select>
                            <select id="meses" class="form-select" aria-label="Meses">
                                <option> Octubre 2023</option>
                                <option> Septiembre 2023</option>
                                <option> Octubre 2023</option>
                            </select>

                            <button type="submit" class="btn bg-primario text-light ">Buscar</button>
                        </form>
                    </div>
                    <div class="container bg-blanco sombra mt-3  p-4">
                        <!-- hoverable rows -->
                        <table class="table table-hover w-100 tabla-nomia">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" class=" text-center">Metodo de pago</th>
                                    <th scope="col" class=" text-center">status</th>
                                    <th scope="col" class=" text-center">Cantidad</th>
                                    <th scope="col" class=" text-center">Fecha</th>
                                    <th scope="col" class=" text-center">Descargar</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="text-start">
                                    <th scope="row">1</th>
                                    <td>Nomina</td>
                                    <td>
                                        <p class="badge bg-warning ">Pendiente</p>
                                    </td>
                                    <td>$15000</td>
                                    <td>06/10/2023</td>
                                    <td>
                                        <a href="{{route('pagosPDF.index')}}" class="descargar text-warning"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="25 " height="25 "
                                                fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg></a>
                                    </td>
                                </tr>

                                <tr class="text-start">
                                    <th scope="row">2</th>
                                    <td>Nomina</td>
                                    <td>
                                        <p class="badge bg-success ">Pagado</p>
                                    </td>
                                    <td>$15000</td>
                                    <td>06/09/2023</td>
                                    <td>
                                        <a href="#" class="descargar text-warning"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="25 " height="25 "
                                                fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg></a>
                                    </td>
                                </tr>

                                <tr class="text-start">
                                    <th scope="row">3</th>
                                    <td>Nomina</td>
                                    <td>
                                        <p class="badge bg-success ">Pagado</p>
                                    </td>
                                    <td>$15000</td>
                                    <td>06/08/2023</td>
                                    <td>
                                        <a href="#" class="descargar text-warning"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="25 " height="25 "
                                                fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <th scope="row">4</th>
                                    <td>Nomina</td>
                                    <td>
                                        <p class="badge bg-success ">Pagado</p>
                                    </td>
                                    <td>$15000</td>
                                    <td>06/07/2023</td>
                                    <td>
                                        <a href="#" class="descargar text-warning"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="25 " height="25 "
                                                fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <th scope="row">5</th>
                                    <td>Nomina</td>
                                    <td>
                                        <p class="badge bg-success ">Pagado</p>
                                    </td>
                                    <td>$15000</td>
                                    <td>06/06/2023</td>
                                    <td>
                                        <a href="#" class="descargar text-warning"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="25 " height="25 "
                                                fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 col-lg-9 h-25 d-none  " id="vista-perfil">
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
                                    <input type="text" id="fname" class="form-control" placeholder="First Name"
                                        required>
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lname">Apellidos</label>
                                    <input type="text" id="lname" class="form-control" placeholder="Last Name"
                                        required>
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
                                <div class="mb-3 col-12 col-md-12">

                                    <label for="exampleFormControlInput1" class="form-label">Titulo
                                        Universitario</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Ing.Sistemas Computacionales.">

                                </div>
                                <div class="mt-3 col-12 col-md-12 text-end">
                                    <button type="submit" class="btn bg-primario text-light">Actualizar</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9 h-25 d-none " id="vista-seguridad">
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
@endsection
