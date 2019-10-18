<!DOCTYPE html>
        <html>

      <body>
       {include file="headerAdmin.tpl"}

       <div id="textoinicio">
          <h2> <a href="revistas" type="button"  class="btn btn-outline-secondary" id="botonRevista">Revistas</a> 
          Revistas publicadas 
          <a href="categorias" type="button" class="btn btn-outline-secondary" id="botonCategoria">Categorias</a> </h2>

        </div>
            <div id="formatoTabla">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col"> Titulo </th>
            <th scope="col"> Descripción </th>
            <th scope="col"> Fecha </th>
            <th scope="col"> Borrar </th>
            <th scope="col"> Editar </th>
            </tr>
            </thead>
            <tbody id="cuerpoTabla">
            {foreach $revistas as $revista }
            <tr>
            <td> <a href="detalleRevistas/{$revista['id_revistas']}">{$revista['titulo']} </a></td>
            <td> {$revista['descripcion']}</td>
            <td> {$revista['fecha']}</td>
            <form action="borrar" method="get">
            <td><button value="{$revista['id_revistas']}" type="sudmit">Borrar</button></td>
            <td><button value="{$revista['id_revistas']}" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
            </form>
            {/foreach}
            </tr>

            </tbody>
            </table>
                </div>
        <form id="formview" action="agregarRevista" method="post">
                  <div class="form-group">
                      <label> Titulo de Revista a publicar: </label>
                      <input name="titulo" type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
                  </div>
                  <div class="form-group">
                      <label> Descripción de la Revista: </label>
                      <input name="descripcion" type="text" class="form-control" id="autorTabla" placeholder="Descripcion">
                  </div>
                  <div class="form-group">
                      <label> Fecha de publicación: </label>
                      <input name="fecha" type="text" class="form-control" id="tipoTabla" placeholder="Mes de publicación">
                  </div>
                 <div class="form-group">
                      <label for="inputState">Filtrar por:</label>
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Seleccione  </option>


          <option>
          {foreach from=$categorias item=categoria}
          <option name="categoria" value="{$categoria['id_categorias']}"> {$categoria['nombreCat']} </option>
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
      {include file="footer.tpl"}
