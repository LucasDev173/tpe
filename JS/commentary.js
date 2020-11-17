"use strict"

const app = new Vue({
    el: "#app",
    data: {
        libros: [], 
    }, 
});

document.addEventListener('DOMContentLoaded', e => {
    getLibros();

    

});

async function getLibros() {
    try {
        const response = await fetch('api/Libro');
        const Libros = await response.json();
        
        // imprimo por pantalla
        app.libros = Libros;
        let formularios = document.querySelectorAll('.addCommentary')
        formularios.forEach(formulario => {
            formulario.addEventListener('submit', e => {
                e.preventDefault();
                    addComentario();
            });    
        });
        
    } catch(e) {
        console.log(e);
    }
}


async function addComentario() {

    // armo el comentario TENGO QUE TOMAR ID USUARIO DE ALGUN LADO (DATA-SET??)
    const Comen = {
        texto: document.querySelector('input[name=texto]').value,
        puntaje: document.querySelector('select[name=puntaje]').value,
    }

    try {
        const response = await fetch('api/Comentario' , {
            method: 'POST',
            headers: {'Content-Type': 'application/json'}, 
            body: JSON.stringify(Comen)
        });

        const t = await response.json();
        app.libros.push(t);

    } catch(e) {
        console.log(e);
    }
 
}

