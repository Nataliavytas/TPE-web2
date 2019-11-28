"use strict"

document.addEventListener("DOMContentLoaded", global);

function global() {

// document.querySelector("#formComentar").addEventListener("submit", addComentario);


let app = new Vue({
    el: "#comentarios",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        comentarios: [],
        promedioPuntuacion:"",
        usr:""
    },
    methods: {
      deleteComentario: function (id) {

        fetch('api/comentarios/'+id, {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}       
        })
        .then(function(){
            getComentarios();
        })
        .catch(error => console.log(error));
      },
      addComentario: function() {
      
        console.log("entro");
        let data = {
            "id_revistas": objId,
            "id": usuarioID,
            "comentario":  document.querySelector("textarea[name=comentario]").value,
            "puntuacion":  document.querySelector("select[name=puntuacion]").value
        }
        
        document.querySelector("textarea[name=comentario]").value = "";
    
        console.log(document.querySelector("select[name=puntuacion]").value);
        fetch("api/comentarios", {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},       
            body: JSON.stringify(data) 
         })
         .then(response => {
           // getComentarios();
         })
         .catch(error => console.log(error));
    }
    }
});


let container = document.getElementById("container");
let objId = container.dataset.objectid;
 let usuario = container.dataset.user;
 let usuarioID = container.dataset.userid;
console.log(usuarioID);
console.log(usuario);
getComentarios(objId);



function getComentarios() {

    fetch("api/comentarios/"+ objId)
    .then(response => response.json())
    .then(comentarios => {
        let promedio = Math.floor(getPuntuacion(comentarios))
        app.promedioPuntuacion = promedio ; 
        app.comentarios = comentarios;   
        app.usr = usuario;   
        console.log(comentarios);
    })
    .catch(error => console.log(error));
}

function getPuntuacion(comentarios){
    let total = 0;
    let tamanio = comentarios.length;
    for(let comentario of comentarios){
        total += parseInt(comentario.puntuacion);
        console.log(comentarios);
    }
    return total/tamanio;
}


// function addComentario (event) {
//     event.preventDefault();
//     console.log("entro");
//     let data = {
//         "id_revistas": objId,
//         "id": usuarioID,
//         "comentario":  document.querySelector("textarea[name=comentario]").value,
//         "puntuacion":  document.querySelector("input[name=puntuacion]").value
//     }
    
//     document.querySelector("textarea[name=comentario]").value = "";
//     document.querySelector("input[name=puntuacion]").value = "";

//     fetch("api/comentarios", {
//         method: 'POST',
//         headers: {'Content-Type': 'application/json'},       
//         body: JSON.stringify(data) 
//      })
//      .then(response => {
//         getComentarios();
//      })
//      .catch(error => console.log(error));
// }

}
