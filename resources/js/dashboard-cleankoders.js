// Variables
const btnMisuscripcion = document.querySelectorAll('#mi-suscripcion');
const btnPagos = document.querySelectorAll('#pagos');
const btnFacturas = document.querySelectorAll('#facturas');

const btnPerfil = document.querySelectorAll('#perfil2');
const btnSeguridad = document.querySelectorAll('#seguridad2');


// Vistas

const vistaMisuscripcion = document.querySelector('#vista-MiSuscripcion');
const vistaPagos = document.querySelector('#vista-pagos');
const vistaFacturas = document.querySelector('#vista-facturas');
const vistaPerfil = document.querySelector('#vista-perfil2');
const vistaSeguridad = document.querySelector('#vista-seguridad2');

// eventos
Eventlistener();

function Eventlistener() {
    btnMisuscripcion.forEach(function (btn) {
        btn.addEventListener('click', mostrarMisuscripcion);
    });

    btnPagos.forEach(function (btn) {
        btn.addEventListener('click', mostrarPagos);
    });

    btnFacturas.forEach(function (btn) {
        btn.addEventListener('click', mostrarFacturas);
    });

    btnPerfil.forEach(function (btn) {
        btn.addEventListener('click', mostrarPerfil);
    });

    btnSeguridad.forEach(function (btn) {
        btn.addEventListener('click', mostrarSeguridad);
    });

}

// funciones


function mostrarMisuscripcion(e) {
    e.preventDefault();
    btnMisuscripcion.forEach(function (btn) {
        btn.classList.add('activo');
    });
    btnPagos.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnFacturas.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPerfil.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnSeguridad.forEach(function (btn) {
        btn.classList.remove('activo');
    });

    vistaMisuscripcion.classList.remove('d-none');
    vistaMisuscripcion.classList.add('d-grid');
    vistaPagos.classList.remove('d-grid');
    vistaPagos.classList.add('d-none');
    vistaFacturas.classList.remove('d-grid');
    vistaFacturas.classList.add('d-none');
    vistaPerfil.classList.remove('d-grid');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.remove('d-grid');
    vistaSeguridad.classList.add('d-none');
}

function mostrarPagos(e) {
    e.preventDefault();
    btnMisuscripcion.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPagos.forEach(function (btn) {
        btn.classList.add('activo');
    });
    btnFacturas.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPerfil.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnSeguridad.forEach(function (btn) {
        btn.classList.remove('activo');
    });

    vistaMisuscripcion.classList.remove('d-grid');
    vistaMisuscripcion.classList.add('d-none');
    vistaPagos.classList.remove('d-none');
    vistaPagos.classList.add('d-grid');
    vistaFacturas.classList.remove('d-grid');
    vistaFacturas.classList.add('d-none');
    vistaPerfil.classList.remove('d-grid');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.remove('d-grid');
    vistaSeguridad.classList.add('d-none');
}

function mostrarFacturas(e) {
    e.preventDefault();
    btnMisuscripcion.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPagos.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnFacturas.forEach(function (btn) {
        btn.classList.add('activo');
    });
    btnPerfil.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnSeguridad.forEach(function (btn) {
        btn.classList.remove('activo');
    });

    vistaMisuscripcion.classList.remove('d-grid');
    vistaMisuscripcion.classList.add('d-none');
    vistaPagos.classList.remove('d-grid');
    vistaPagos.classList.add('d-none');
    vistaFacturas.classList.remove('d-none');
    vistaFacturas.classList.add('d-grid');
    vistaPerfil.classList.remove('d-grid');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.remove('d-grid');
    vistaSeguridad.classList.add('d-none');
}

function mostrarPerfil(e) {
    e.preventDefault();
    btnMisuscripcion.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPagos.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnFacturas.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPerfil.forEach(function (btn) {
        btn.classList.add('activo');
    });
    btnSeguridad.forEach(function (btn) {
        btn.classList.remove('activo');
    });

    vistaMisuscripcion.classList.remove('d-grid');
    vistaMisuscripcion.classList.add('d-none');
    vistaPagos.classList.remove('d-grid');
    vistaPagos.classList.add('d-none');
    vistaFacturas.classList.remove('d-grid');
    vistaFacturas.classList.add('d-none');
    vistaPerfil.classList.remove('d-none');
    vistaPerfil.classList.add('d-grid');
    vistaSeguridad.classList.remove('d-grid');
    vistaSeguridad.classList.add('d-none');
}

function mostrarSeguridad(e) {
    e.preventDefault();
    btnMisuscripcion.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPagos.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnFacturas.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnPerfil.forEach(function (btn) {
        btn.classList.remove('activo');
    });
    btnSeguridad.forEach(function (btn) {
        btn.classList.add('activo');
    });

    vistaMisuscripcion.classList.remove('d-grid');
    vistaMisuscripcion.classList.add('d-none');
    vistaPagos.classList.remove('d-grid');
    vistaPagos.classList.add('d-none');
    vistaFacturas.classList.remove('d-grid');
    vistaFacturas.classList.add('d-none');
    vistaPerfil.classList.remove('d-grid');
    vistaPerfil.classList.add('d-none');
    vistaSeguridad.classList.remove('d-none');
    vistaSeguridad.classList.add('d-grid');
}
