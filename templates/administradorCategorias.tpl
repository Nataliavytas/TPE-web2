<!DOCTYPE html>
        <html>

      <body>
       {include file="headerAdmin.tpl"}

       <div id="textoinicio">
          <h2><a href="revistas" type="button" class="btn btn-outline-secondary">Revistas</a> Categorias publicadas <a href="categorias" type="button" class="btn btn-outline-secondary">Categorias</a></h2>
        </div>

        <form id="formview" action="insertar" method="post">
            <div class="form-group">
                <label> categoria a publicar: </label>
                <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
        </form>

          <div id="formatoTabla">
          <table class="table table-bordered">
          <thead>
          <tr>
          <th scope="col"> Categorias </th>
          <th scope="col"> Borrar </th>
          <th scope="col"> Editar </th>
          </tr>
          </thead>
          <div id="textoinicio">
            <h2> Todas las categorias. </h2>
          </div>
          <tbody id="cuerpoTabla">
          {foreach $categorias as $categoria }
          <tr>
          <td> {$categoria['nombreCat']}</td>
          <form action="borrar" method="get">
          <td><button value="{$borrar['id_categorias']}" type="sudmit">Borrar</button></td>
          <td><button value="{$editar['id_categorias']}" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
          </form>
          {/foreach}
          </tr>

          </tbody>
          </table>
          </div>

        {*Tabla inferior donde van a estar ubicadas las revistas.
        #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
        #quien trae info de mysql. *}
        {include file="footer.tpl"}
