<!DOCTYPE html>
        <html>

      <body>
       {include file="headerAdmin.tpl"}

       <div id="textoinicio">
          <h2> Edicion de Categorias. </h2>
        </div>
          <form id="formview" action="insertar" method="post">
              <div class="form-group">
                  <label> Titulo de categoria: </label>
                  <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-primary">Insertar</button>
              </div>
          </form>

          {*Tabla inferior donde van a estar ubicadas las revistas.
          #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
          #quien trae info de mysql. *}

          {include file="categoriasTODASadmin.tpl"}

*}
