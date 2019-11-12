<div id="textoinicio">
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active">
        <a data-toggle="tab" href="#home" class="btn btn-outline-secondary">Comentarios:</a>
      </li>
      <li>
        <a data-toggle="tab" href="#menu1" class="btn btn-outline-secondary">Deja tu comentario: </a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h6>Usuario: {*$  ['   ']*}</h6>
    </div>
      <div id="menu1" class="tab-pane fade">
        <form id="formview" action="" method="">
            <div class="form-group">
                     <label> Nombre de Usuario: </label>
                     {*value="{$ ['    ']}" *}
                     <input name="FormComentNombre" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre de usuario">
                 </div>
                 <div class="form-group">
                     <label> Comentario: </label>
                     {*value="{$ ['     ']}"*}
                     <input  name="FormComentComentario" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Comentario">
                 </div>
                 <div class="form-group">
                   <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                 </div>
             </form>
    </div>
    </div>
  </div>

  </div>
