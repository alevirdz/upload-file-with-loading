document.addEventListener("DOMContentLoaded", ()=>{
    let formulario = document.getElementById("subirArchivos");

    formulario.addEventListener("submit", function (event){
        event.preventDefault();
        subir_archivo(this);
    })
})

function subir_archivo (form){
    let barra_estado = form.children[1].children[0],
    span = barra_estado.children[0],
    boton_cancelar = form.children[2].children[1];

    barra_estado.classList.remove("barra-verde", "barra-rojo");

    //Petición Ajax

    let ajax = new XMLHttpRequest();

    //Progreso
    ajax.upload.addEventListener("progress", (event) => {
        let porcentaje = Math.round(event.loaded / event.total) * 100

        console.log(porcentaje)
        barra_estado.style.width = porcentaje+'%';
        span.innerHTML =  porcentaje + '%'
    })

    //Finalizado

    ajax.addEventListener("load", () =>{
        barra_estado.classList.add('barra-verde');
        span.innerHTML = "Proceso Completado"
    })

    //Enviar

    ajax.open('POST', 'subir.php');
    ajax.send( new FormData(form));

    //Cancelar
    boton_cancelar.addEventListener("click", () => {
        ajax.abort();
        barra_estado.classList.remove('barra-verde');
        barra_estado.classList.add('barra-roja');
        span.innerHTML = "Proceso Cancelado";
    });
}
