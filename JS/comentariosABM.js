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
        let data = {
            "id_revistas": objId,
            "id": usuarioID,
            "comentario":  document.querySelector("textarea[name=comentario]").value,
            "puntuacion":  document.querySelector("select[name=puntuacion]").value
        }
        
        document.querySelector("textarea[name=comentario]").value = "";

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
    }
});


let container = document.getElementById("container");
let objId = container.dataset.objectid;
 let usuario = container.dataset.user;
 let usuarioID = container.dataset.userid;
getComentarios(objId);



function getComentarios() {

    fetch("api/comentarios/"+ objId)
    .then(response => response.json())
    .then(comentarios => {
        let promedio = parseFloat(Math.round(getPuntuacion(comentarios) * 100) / 100).toFixed(2);
        if(promedio >= 0 ){
            app.promedioPuntuacion = promedio ; 
        }else{
            app.promedioPuntuacion = 0;  
        }
        app.comentarios = comentarios;   
        app.usr = usuario;   
    })
    .catch(error => console.log(error));
}

function getPuntuacion(comentarios){
    let total = 0;
    let tamanio = comentarios.length;
    for(let comentario of comentarios){
        total += parseInt(comentario.puntuacion);

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
