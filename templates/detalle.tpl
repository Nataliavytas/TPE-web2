<!DOCTYPE html>
      <html>
      <body>
        {include file="header.tpl"}

      {foreach from=$detalle item=det}
      <div class="card" id="textoinicio">

         <div class="card-body">
            <h3 class="card-title"> {$det["titulo"]} </h3>
            <p class="card-text">Categoria: {$det["nombreCat"]}  </p>
            <p class="card-text">Fecha de publicacion: {$det["fecha"]} </p>
            <p class="card-text"> {$det["descripcion"]} </p>
            <label id="imagen"> {$det["imagen"]} </label>
            <a href="revistas" class="card-link"> Volver  </a>
         </div>

      </div>
      {/foreach}
        {include file="vue/comentarios.tpl"}
        {include file="footer.tpl"}

        </body>
     </html>
