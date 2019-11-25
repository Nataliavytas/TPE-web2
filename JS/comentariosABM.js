"use strict"

document.addEventListener("DOMContentLoaded", global);

function global() {

document.querySelector("#formComentar").addEventListener("submit", addComentario);


let app = new Vue({
    el: "#comentarios",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        comentarios: [] 
    },
    methods: {
      deleteComentario: function (id) {

        fetch('api/comentarios/'+id, {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}       
        })
        .then(function(){
            setIds();
        })
        .catch(error => console.log(error));
      }
    }
});

setIds();

function setIds(){
    let container = document.getElementById("container");
    let objId = container.dataset.objectid;
   
    console.log(objId);
    
    getComentarios(objId);
}


function getComentarios(revistaID) {

    fetch("api/comentarios/"+ revistaID)
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
        console.log(comentarios);
    })
    .catch(error => console.log(error));
}

function addComentario (event) {
    event.preventDefault();

    let data = {
        "id_revistas":  document.querySelector("input[name=id]").value,
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
         setIds();
     })
     .catch(error => console.log(error));
}

}
