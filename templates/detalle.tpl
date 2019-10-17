<!DOCTYPE html>
        <html>

      <body>
       {include file="header.tpl"}
       <div id="textoinicio">
              <h2> Detalle de revista seleccionada. </h2>
       </div>
       <div id="textoinicio">
              {foreach from=$detalle item=det}
                <h4>Titulo: {$det['Titulo']}</h4>
                <h5>Categoria: {$det['nombreCat']} |</h5>
                <h5>Fecha: {$det['fecha']} |</h5>
                <h5>Precio: $ {$det['Precio']}</h5>
                <h5>Descripcion:</h5>
                {$det['descripcion']}<br>
              {/foreach}
  </div>

        {include file="footer.tpl"}
        </body>
     </html>
