
  
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Comentarios:
        </button>
      </h2>
    </div>
        {foreach $comentarios as $coment}

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

      <div class="card-body">
            <h6>Usuario: {$coment["nombreUsuario"]}</h6>
            <p> Comentario: {$coment["comentario"]}</p>
            <p> Fecha de publicacion: {$coment["fechaComentario"]} </p>
{*            {foreach $revistas as $revista}*}
              <form method="POST" action="admin/rateStar/{$revista['id_revistas']}" >
                <div class="rate" class="form-group" value="{$coment['puntuacion']}">
                  <input type="submit" type="radio" id="star5" name="rate" value="5" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="submit" type="radio" id="star4" name="rate" value="4" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="submit" type="radio" id="star3" name="rate" value="3" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="submit" type="radio" id="star2" name="rate" value="2" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="submit" type="radio" id="star1" name="rate" value="1" />
                  <label for="star1" title="text">1 star</label>
                </div>
              </form>

      </div>
    </div>
    {/foreach}
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Deja tu comentario:
        </button>
      </h2>
    </div>


    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

      <div class="card-body">
        {foreach $comentarios as $coment}
        <form method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre de Usuario:</label>
            <input name="nombreU" value="{$coment['nombreUsuario']}" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Usuario">
          </div>
      <div class="form-group">
          <label for="exampleFormControlInput1">fecha:</label>
          <input name="fechaC" value="{$coment['fechaComent']}" type="date" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="fecha">
      </div>
      <div class="form-group">
          <label for="exampleFormControlTextarea1">Comentario:</label>
          <textarea name="comentarioC" value="{$coment['comentario']}" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="form-control form-control-lg" type="submit" class="btn btn-light">Enviar</button>
        {/foreach}
  </form>
  </div>
      </div>
    </div>
  </div>