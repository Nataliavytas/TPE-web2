<!DOCTYPE html>
        <html>

      <body>
       {include file="header.tpl"}
       <div id="textoinicio">
              <h2> Revistas publicadas </h2>
              </div>
              <form id="formview" action="insertar" name="SeleccionCat" method="get">
                  <div class="form-group">
                      <label for="inputState">Filtrar por Categoria:</label>
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Seleccione  </option>
          <option>
          {foreach $categorias as $categoria}
          <option value="{$categoria['id_categorias']}"> {$categoria['nombreCat']} </option>
          </option>
          {/foreach}
       </select>
       </div>
       </form>
       {debug}
       {include file="revistasTODAS.tpl"}
        {include file="footer.tpl"}
        </body>
     </html>
