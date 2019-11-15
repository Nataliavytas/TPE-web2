

<div class="container">
  <h3>Comentarios de revista: </h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Comentarios:</a></li>
    <li><a data-toggle="tab" href="#menu1">Deja tu comentario:</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      {foreach $comentarios as $coment}
          <p>{$coment['comentario']}</p>

          </div>
          <div id="menu1" class="tab-pane fade">
            <h3>Deja tu comentario:</h3>
                {foreach $revistas as $revista}
            <form action="admin/agregarComentario/{$revista['id_revistas']}" method="POST">
              <div class="form-group">
                  <label for="exampleFormControlInput1">Nombre de Usuario:</label>
                  <input value="{$coment['NombreUsuario']}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Usuario">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">fecha:</label>
                  <input value="{$coment['fechaComent']}" type="date" class="form-control" id="exampleFormControlInput1" placeholder="fecha">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comentario:</label>
                  <textarea value="{$coment['comentario']}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-light" value="{$revista['id_revistas']}">Enviar</button>
          </form>
          </div>
          {/foreach}
    {/foreach}

  </div>
</div>
