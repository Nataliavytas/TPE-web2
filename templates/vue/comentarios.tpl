{literal}
<div id="comentarios">

<ul>
       <li v-for="comentario in comentarios"> {{comentario.comentario}} 
        <button id="borrarComentario" type="button" v-on:click="deleteComentario(comentario.id_comentario)"> {{comentario.id_comentario}} </button>
        </li>
      
</ul>

</div> 

       <form id="formComentar">
            <div>
            <label> id revista</label>
            <input name="id" type="text" placeholder="id">
          </div>
          <div>
            <label> Nombre de Usuario:</label>
            <input name="nombreUsuario" type="text" placeholder="Usuario">
          </div>
          <div>
          <label>puntuacion</label>
          <input name="puntuacion">
      </div>
      <div>
          <label >Comentario:</label>
          <textarea name="comentario" type="text" rows="3"></textarea>
      </div>
      <button id="botonComentar" type="submit"> Enviar </button>
      

  </form>  

{/literal}