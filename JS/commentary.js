"use strict"

let app = new Vue({
    el: "#app",
    data: {
        comentarios: [],
    }, 
});

document.addEventListener('DOMContentLoaded', e => {
    let ID = window.location.pathname.substr(window.location.pathname.lastIndexOf("/")+1);
    getComentarios(ID);
});

async function getComentarios(LibroID) {
    try {
        const response = await fetch('api/Comentario/'+LibroID);
        const comentarios = await response.json();
        
        // imprimo por pantalla
        if (comentarios instanceof Array) {
            app.comentarios = comentarios;
        }
        else {
            app.comentarios.push(comentarios);
        } 
        document.querySelector('#addCommentary').addEventListener('submit', e => {
            e.preventDefault();
            addComentario(LibroID);
        });    
    }
    catch(e) {
        console.log(e);
    }
    
}

async function addComentario(LibroID) {

    // armo el comentario
    const Comen = {
        id      : LibroID,
        texto   : document.querySelector('input[name=texto]').value,
        puntaje : document.querySelector('select[name=puntaje]').value,
    }

    try {
        const response = await fetch('api/Comentario/'+LibroID, {
            method  : 'POST',
            headers : {'Content-Type': 'application/json'}, 
            body    : JSON.stringify(Comen)
        });
        
        const t = await response.json();
        app.comentarios.push(t);
        window.location.reload();

    } catch(e) {
        console.log(e);
    }
}