{literal}
<div id="comentarios">
<div class="jumbotron"> 
<h3>El promedio de puntuacion es: {{promedioPuntuacion}} </h3> 
</div> 
<div v-for="comentario in comentarios">
        <div class="card">
          <div class="card-body">
              <p> Usuario con id {{comentario.id}} dice:</p>
              <p> {{comentario.comentario}} </p>
              <p> Puntuacion dada: {{comentario.puntuacion}} </p>
         </div>
         <span v-show="usr == 1">
         <button id="borrarComentario" type="button" v-on:click="deleteComentario(comentario.id_comentario)"> Eliminar </button>
         </span>
         </div>
         </div>

      <div> 
          <form id="formComentar" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">puntuacion:</label>
                  <select id="exampleFormControlInput1" class="form-control" name="puntuacion">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comentario:</label>
                  <textarea name="comentario" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" id="botonComentar" v-on:click="addComentario()">Enviar</button>
          </form>
      </div>


</div>
{/literal}