
  
  <div class="accordion" id="comentarios">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Comentarios:
        </button>
      </h2>
    </div>
        

    <div v-for="comentario in comentarios" id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

      <div class="card-body">
            <h6>Usuario: {{comentario.nombreUsuario}}</h6>
            <p> Comentario: {{comentario.comentario}}</p>
            <p> Fecha de publicacion:{{comentario.fechaComentario}} </p>

              <form method="POST">
                <div class="rate" class="form-group" value="{{comentario.puntuacion}}">
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
  
        <form id="formComentar" method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre de Usuario:</label>
            <input name="nombreUsuario" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">id revista</label>
            <input name="id" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="id revista">
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">fecha:</label>
            <input name="fecha" type="date" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="fecha">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Comentario:</label>
            <textarea name="comentario" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="form-control form-control-lg" type="submit" class="btn btn-light">Enviar</button>
 
  </form>
  </div>
      </div>
    </div>
  </div>