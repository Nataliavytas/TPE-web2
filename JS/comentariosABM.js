"use strict"


document.addEventListener("DOMContentLoaded", getComentarios);
document.querySelector("#botonComentar").addEventListener("click", addComentario);
document.querySelector("#borrarComentario").addEventListener("click", deleteComentario);

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
        console.log(comentarios);
    })
    .catch(error => console.log(error));
}

function addComentario (e) {
    e.preventDefault();

    let data = {
        "id_revista":  document.querySelector("input[name=id]").value,
        "nombreUsuario":  document.querySelector("input[name=nombreUsuario]").value,
        "comentario":  document.querySelector("textarea[name=comentario]").value,
        "puntuacion":  document.querySelector("input[name=puntuacion]").value
    }
    console.log(data);

    fetch("api/comentarios", {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}

    function deleteComentario() {
        event.preventDefault();
        console.log("entro");

        fetch('api/comentarios/'+id, {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}       
        })
        .then(function(){
            getComentarios();
        })
        .catch(error => console.log(error));
    }


