

const btnAgregar = document.querySelector('#agregarClase');


btnAgregar.addEventListener('click', agregarClase);

function agregarClase(e) {
    e.preventDefault();
    const contenedor = document.querySelector('#contenedor-clases');
    const clase = document.createElement('div');
    clase.classList.add('nueva-clase');
    clase.innerHTML = `
    <hr>
    <div class="mb-5">
    <label for="clase">Nombre de la clase</label>
    <input type="text" class=" form-control " name="" id="">
</div>
<div class="input-group mb-5 d-flex flex-column ">
    <label for="" class="">Recursos de la clase</label>
    <div class="">
        <label class="input-group-text bg-primario text-light "
        for="inputGroupFile01">Upload</label>
    <input type="file" class="form-control" id="inputGroupFile01">
    </div>
    <div class="">
        <p class="h5 text-danger">Sube archivos pdf, zip, rar, etc... menos archivos de video</p>
    </div>
</div>
<div class="input-group mb-5 d-flex flex-column ">
    <label for="" class="">Video de la clase</label>
    <div class="">
        <label class="input-group-text bg-primario text-light "
        for="inputGroupFile01">Upload</label>
    <input type="file" class="form-control" id="inputGroupFile01" accept="video/.mp4">
    </div>
    <div class="mb-5">
        <p class="h5 text-danger">Solamente archivos .mp4</p>
    </div>
   
</div>
    `;
    
    contenedor.appendChild(clase);
}
