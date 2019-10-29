<!DOCTYPE html>
        <html>
{*  <base href="http://{$smarty.server.SERVER_NAME}:{$smarty.server.SERVER_PORT}{dirname($smarty.server.PHP_SELF)}/">*}
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
            <form action="editar/{$revista['id_revistas']}" method="POST">

            <td>
              <a class="btn btn-light" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">{$revista['titulo']}</a>
            <div class="row">
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="card card-body">
                      <input name="titulo" type="text" value="{$revista['titulo']}">
                  </div>
                </div>
              </div>
            </div></td>
            <td>
              <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">{$revista['descripcion']}</button>
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                  <div class="card card-body">
                      <input name="descripcion" type="text" value="{$revista['descripcion']}">
                  </div>
                </div>
              </div>
            </td>

            <td>
                <a class="btn btn-light" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">{$revista['fecha']}</a>
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                          <input name="fecha" type="text" value="{$revista['fecha']}"> </td>
                        </div>
                      </div>
                    </div>



            <td><button class="btn btn-secondary btn-sm" type="submit" value="{$revista['id_revistas']}"  href="borrar/{$revista['id_revistas']}"> Borrar </button></td>

            <td><button class="btn btn-secondary btn-sm" type="submit" value="{$revista['id_revistas']}" href="editar/{$revista['id_revistas']}"> Editar </button></td>
            </form>
             </tr>


            {/foreach}


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
                      <label for="inputState">Seleccione categoria:</label>
                      <select id="tipoFiltro" class="form-control" name="categoria"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Seleccione  </option>
                            {foreach from=$categorias item=categoria}
                            <option value="{$categoria['id_categorias']}"> {$categoria['nombreCat']} </option>
                            {/foreach}
                         </select>
                         </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                  </div>
              </form>
      {include file="footer.tpl"}
