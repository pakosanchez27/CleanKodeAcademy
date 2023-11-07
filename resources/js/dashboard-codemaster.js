// Variables

import { eventListeners } from "@popperjs/core";

// Variables Dashboard
const btnDashboard = document.querySelectorAll('#dashboard');
const btnMisCursos = document.querySelectorAll('#mis-cursos');
const btnMisCleankoders = document.querySelectorAll('#mis-cleankoders');
const btnComentarios = document.querySelectorAll('#comentarios');
const btnIngresos = document.querySelectorAll('#ingresos');


// Variables configuracion

const btnPerfil = document.querySelectorAll('#perfil');
const btnSeguridad = document.querySelectorAll('#seguridad');


// Vistas
const vistaDashboard = document.querySelector('#vista-dashboard');
const vistaMisCursos = document.querySelector('#vista-misCursos');
const vistaMisCleankoders = document.querySelector('#vista-cleankoders');
const vistaComentarios = document.querySelector('#vista-comentarios');
const vistaIngresos = document.querySelector('#vista-ingresos');
const vistaPerfil = document.querySelector('#vista-perfil');
const vistaSeguridad = document.querySelector('#vista-seguridad');

// Eventos
EventosDash();
function EventosDash() {

    btnDashboard.forEach(element => {
        element.addEventListener('click', mostrarDashboard);
    });

    btnMisCursos.forEach(element => {
        element.addEventListener('click', mostrarMisCursos);
    });

    btnMisCleankoders.forEach(element => {
        element.addEventListener('click', mostrarMisCleankoders);
    });

    btnComentarios.forEach(element => {
        element.addEventListener('click', mostrarComentarios);
    });

    btnIngresos.forEach(element => {
        element.addEventListener('click', mostrarIngresos);
    });

    btnPerfil.forEach(element => {
        element.addEventListener('click', mostrarPerfil);
    });

    btnSeguridad.forEach(element => {
        element.addEventListener('click', mostrarSeguridad);
    });
}

// Funciones
function mostrarDashboard(e){
    e.preventDefault();
    vistaDashboard.classList.remove('d-none');
    vistaMisCursos.classList.add('d-none');
    vistaMisCleankoders.classList.add('d-none');
    vistaComentarios.classList.add('d-none');
    vistaIngresos.classList.add('d-none');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.add('d-none');
}

function mostrarMisCursos(e){
    e.preventDefault();
    vistaDashboard.classList.add('d-none');
    vistaMisCursos.classList.remove('d-none');
    vistaMisCleankoders.classList.add('d-none');
    vistaComentarios.classList.add('d-none');
    vistaIngresos.classList.add('d-none');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.add('d-none');
}

function mostrarMisCleankoders(e){
    e.preventDefault();
    vistaDashboard.classList.add('d-none');
    vistaMisCursos.classList.add('d-none');
    vistaMisCleankoders.classList.remove('d-none');
    vistaComentarios.classList.add('d-none');
    vistaIngresos.classList.add('d-none');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.add('d-none');
}

function mostrarComentarios(e){
    e.preventDefault();
    vistaDashboard.classList.add('d-none');
    vistaMisCursos.classList.add('d-none');
    vistaMisCleankoders.classList.add('d-none');
    vistaComentarios.classList.remove('d-none');
    vistaIngresos.classList.add('d-none');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.add('d-none');
}

function mostrarIngresos(e){
    e.preventDefault();
    vistaDashboard.classList.add('d-none');
    vistaMisCursos.classList.add('d-none');
    vistaMisCleankoders.classList.add('d-none');
    vistaComentarios.classList.add('d-none');
    vistaIngresos.classList.remove('d-none');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.add('d-none');
}

function mostrarPerfil(e){
    e.preventDefault();
    vistaDashboard.classList.add('d-none');
    vistaMisCursos.classList.add('d-none');
    vistaMisCleankoders.classList.add('d-none');
    vistaComentarios.classList.add('d-none');
    vistaIngresos.classList.add('d-none');
    vistaPerfil.classList.remove('d-none');
    vistaSeguridad.classList.add('d-none');
}

function mostrarSeguridad(e){
    e.preventDefault();
    vistaDashboard.classList.add('d-none');
    vistaMisCursos.classList.add('d-none');
    vistaMisCleankoders.classList.add('d-none');
    vistaComentarios.classList.add('d-none');
    vistaIngresos.classList.add('d-none');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.remove('d-none');
}


