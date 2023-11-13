import * as bootstrap from 'bootstrap';
//importa otro archivo de js
import './dashboard-codemaster';
import './dashboard-cleankoders';
import './agregarClase';
// Resto de tu códigoz
// Resto de tu código

// Variables

// Opcines categorias
const opcWeb = document.querySelector('#web') ?? null;
const opcMobile = document.querySelector('#movil');
const opcBase = document.querySelector('#base');
const opcFundamentos = document.querySelector('#fundamentos');
const opcIA = document.querySelector('#IA');


// vistas categorias

const vistaWeb = document.querySelector('#CursosWeb');
const vistaMobile = document.querySelector('#CursosMobile');
const vistaBase = document.querySelector('#CursosBase');
const vistaFundamentos = document.querySelector('#CursosFundamentos');
const vistaIA = document.querySelector('#CursosIA');



// eventos
eventos();

function eventos() {
    opcWeb.addEventListener('click', mostrarWeb) ;
    opcMobile.addEventListener('click', mostrarMobile);
    opcBase.addEventListener('click', mostrarBase);
    opcFundamentos.addEventListener('click', mostrarFundamentos);
    opcIA.addEventListener('click', mostrarIA);



}



// funciones

function mostrarWeb(e) {
    e.preventDefault();
    opcWeb.classList.add('active');
    opcMobile.classList.remove('active');
    opcBase.classList.remove('active');
    opcFundamentos.classList.remove('active');
    opcIA.classList.remove('active');

   //mostrar la vista de cursos web
   vistaWeb.classList.remove('d-none');
   vistaWeb.classList.add('d-grid');
   vistaMobile.classList.remove('d-grid');
   vistaMobile.classList.add('d-none');
   vistaBase.classList.remove('d-grid');
   vistaBase.classList.add('d-none');
   vistaFundamentos.classList.remove('d-grid');
   vistaFundamentos.classList.add('d-none');
   vistaIA.classList.remove('d-grid');
   vistaIA.classList.add('d-none');

}

function mostrarMobile(e) {
    e.preventDefault();
    opcWeb.classList.remove('active');
    opcMobile.classList.add('active');
    opcBase.classList.remove('active');
    opcFundamentos.classList.remove('active');
    opcIA.classList.remove('active');

    //mostrar la vista de cursos mobile
    vistaWeb.classList.remove('d-grid');
    vistaWeb.classList.add('d-none');
    vistaMobile.classList.remove('d-none');
    vistaMobile.classList.add('d-grid');
    vistaBase.classList.remove('d-grid');
    vistaBase.classList.add('d-none');
    vistaFundamentos.classList.remove('d-grid');
    vistaFundamentos.classList.add('d-none');
    vistaIA.classList.remove('d-grid');
    vistaIA.classList.add('d-none');

}

function mostrarBase(e) {
    e.preventDefault();
    opcWeb.classList.remove('active');
    opcMobile.classList.remove('active');
    opcBase.classList.add('active');
    opcFundamentos.classList.remove('active');
    opcIA.classList.remove('active');

    //mostrar la vista de cursos base
    vistaWeb.classList.remove('d-grid');
    vistaWeb.classList.add('d-none');
    vistaMobile.classList.remove('d-grid');
    vistaMobile.classList.add('d-none');
    vistaBase.classList.remove('d-none');
    vistaBase.classList.add('d-grid');
    vistaFundamentos.classList.remove('d-grid');
    vistaFundamentos.classList.add('d-none');
    vistaIA.classList.remove('d-grid');
    vistaIA.classList.add('d-none');

}

function mostrarFundamentos(e) {
    e.preventDefault();
    opcWeb.classList.remove('active');
    opcMobile.classList.remove('active');
    opcBase.classList.remove('active');
    opcFundamentos.classList.add('active');
    opcIA.classList.remove('active');

    //mostrar la vista de cursos fundamentos
    vistaWeb.classList.remove('d-grid');
    vistaWeb.classList.add('d-none');
    vistaMobile.classList.remove('d-grid');
    vistaMobile.classList.add('d-none');
    vistaBase.classList.remove('d-grid');
    vistaBase.classList.add('d-none');
    vistaFundamentos.classList.remove('d-none');
    vistaFundamentos.classList.add('d-grid');
    vistaIA.classList.remove('d-grid');
    vistaIA.classList.add('d-none');

}

function mostrarIA(e) {
    e.preventDefault();
    opcWeb.classList.remove('active');
    opcMobile.classList.remove('active');
    opcBase.classList.remove('active');
    opcFundamentos.classList.remove('active');
    opcIA.classList.add('active');

    //mostrar la vista de cursos IA
    vistaWeb.classList.remove('d-grid');
    vistaWeb.classList.add('d-none');
    vistaMobile.classList.remove('d-grid');
    vistaMobile.classList.add('d-none');
    vistaBase.classList.remove('d-grid');
    vistaBase.classList.add('d-none');
    vistaFundamentos.classList.remove('d-grid');
    vistaFundamentos.classList.add('d-none');
    vistaIA.classList.remove('d-none');
    vistaIA.classList.add('d-grid');

}

