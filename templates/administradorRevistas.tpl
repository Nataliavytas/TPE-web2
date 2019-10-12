<!DOCTYPE html>
        <html>

      <body>
       {include file="headerAdmin.tpl"}

       <div id="textoinicio">
          <h2> Edicion de revistas. </h2>
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
                  <label> Categoria de publicación: </label>
                  <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                      <option> Seleccione  </option>
                      <option>
                      {foreach $categorias as $categoria}
                      <option value="{$categoria['id_categorias']}"> {$categoria['nombreCat']} </option>
                      </option>
                      {/foreach}
                   </select>
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-primary">Insertar</button>
              </div>
          </form>

          {*Tabla inferior donde van a estar ubicadas las revistas.
          #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
          #quien trae info de mysql. *}

          {include file="revistasTODASadmin.tpl"}
