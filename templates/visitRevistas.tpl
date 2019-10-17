<!DOCTYPE html>
        <html>

      <body>
       {include file="header.tpl"}
       <div id="textoinicio">
              <h2> Revistas publicadas </h2>
              </div>
              <form id="formview" action="insertar" name="SeleccionFecha" method="get">
                  <div class="form-group">
                      <label for="inputState">Filtrar por:</label>
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Seleccione  </option>


          <option>
          {foreach from=$categorias item=categoria}
          <option value="{$categoria['id_categorias']}"> {$categoria['nombreCat']} </option>
          </option>
          {/foreach}
       </select>
       </div>
       </form>


       <div class="container">
      {*   {if $filtro !== null}
          {include file="revistasFiltro.tpl"}
          {else}*}
          {include file="revistasTODAS.tpl"}
       </div>

        {include file="footer.tpl"}
        </body>
     </html>
