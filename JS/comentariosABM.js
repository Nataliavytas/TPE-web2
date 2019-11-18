"use strict"


document.addEventListener("DOMContentLoaded", getComentarios);

let app = new Vue({
    el: "#comentarios",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        comentarios: [] 
    }
});

function getComentarios() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

document.querySelector("#form-comentario").addEventListener('submit', addComentario);

function addComentario (e) {
    e.preventDefault();
    
    let data = {
        id_revista:  document.querySelector("input[name=id_revista]").value,
        comentario:  document.querySelector("input[name=comentario]").value,
        puntuacion:  document.querySelector("input[name=puntuacion]").value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}

document.querySelector("#borrarComentario").addEventListener("click", deleteComentario);

    function deleteComentario(id) {
        event.preventDefault();

        fetch('api/comentarios/'+id, {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}       
        })
        .then(function(){
            getComentarios();
        })
        .catch(error => console.log(error));
    }


