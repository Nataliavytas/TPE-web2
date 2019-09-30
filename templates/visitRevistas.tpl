<!DOCTYPE html>
        <html>

      <body>
       {include file="header.tpl"}
       <div id="textoinicio">
              <h2> Revistas publicadas </h2>
              </div>
              <form id="formview" action="insertar" method="post">
                  <div class="form-group">
                      <label for="inputState">Filtrar por:</label>
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Todas </option>
          <option>
          {foreach $revistas as $revista }
          <option> {$revista['fecha']} </option>

          </option>
{/foreach}
       </select>
       </div>
       </form>
       <div id="formatoTabla">
       <table class="table table-bordered">
       <thead>
       <tr>
       <th scope="col"> Titulo </th>
       <th scope="col"> Descripción </th>
       <th scope="col"> Fecha </th>
       </tr>
       </thead>
       <tbody id="cuerpoTabla">
       {foreach $revistas as $revista }
       <tr>
       <td> <a href="detalleRevistas/{$revista['id_revista']}">{$revista['titulo']} </a></td>
       <td> {$revista['descripcion']}</td>
       <td> {$revista['fecha']}</td>
       {/foreach}
       </tr>
       </tbody>
       </table>
       </div>
        {include file="footer.tpl"}
        </body>
     </html>
