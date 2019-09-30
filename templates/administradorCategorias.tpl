<!DOCTYPE html>
        <html>
        
      <body>


          <div id="textoinicio">
          <h2> Revistas publicadas </h2>
          </div>
          <form id="formview" action="insertar" method="post">
              <div class="form-group">
                  <label> Titulo de Revista a publicar: </label>
                  <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
              </div>
              <div class="form-group">
                  <label> Descripción de la Revista: </label>
                  <input type="text" class="form-control" id="autorTabla" placeholder="Descripcion">
              </div>
              <div class="form-group">
                  <label> Fecha de publicación: </label>
                  <input type="text" class="form-control" id="tipoTabla" placeholder="Mes de publicación">
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-primary">Insertar</button>
              </div>
              <div class="form-group">
                  <label for="inputState">Filtrar por:</label>
                  <select  id="tipoFiltro" class="form-control"> 
                    <option> Todas </option>

                    {* Filtro por fecha de publicacion! 
                    Traemos por mysql la columna fecha y la colocamos en los tag de option.
                    Problemas con que trae TODOS los meses repetidos.
                   
                    foreach($revistas as $revista) {
                    $html.= "<option>" . $revista->fecha . "</option>";
                    }
                      $html .= '</option> *}
                  </select>
              </div>
          </form>';

          {*Tabla inferior donde van a estar ubicadas las revistas.
          #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
          #quien trae info de mysql. *}

            <div id="formatoTabla">
                  <table class="table table-bordered">
                  <thead>
                  <tr>
                  <th scope="col"> Titulo </th>
                  <th scope="col"> Descripción </th>
                  <th>Borrar</th>
                  </tr>
                  </thead>
                  <tbody id="cuerpoTabla">';
                 <tr>
                 {foreach from=$revistas item=revista}
                 <td>
                    {foreach from=$revista item=titulo}
                 </td>
                  <td>
                    {foreach from=$revista item=descripcion}
                 </td>
                 </tr>

                 
                 {*} #El titulo tiene que tiene que con el tag <a>  id_revista
                  #Cambiar la base de datos por categorias.
                  #Cambiar el Admin.
                  #Cambiar el nav.
                    {foreach($revistas as $revista)}  
                  <tr><td>".$revista->titulo ."</td><td>".$revista->descripcion."</td><td><a href='borrar/".$revista->id_revista."'>Borrar</a></td>
*}