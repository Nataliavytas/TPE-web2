<!DOCTYPE html>
      <html>
      <body>
        {include file="header.tpl"}

      {foreach from=$detalle item=det}


      <div id="container" data-objectid="{$det['id_revistas']}" data-user="{$user.admin}" data-userid="{$user.id}">
        <div class="jumbotron">
        <h1> {$det["titulo"]} </h1>
          <p>Categoria: {$det["nombreCat"]}  </p>
          <p>Fecha de publicacion: {$det["fecha"]} </p>
          <p> {$det["descripcion"]} </p>
          <label id="imagen">
       </div>
      </div>
      {/foreach}

             <div class="carousel-inner" value="{$img['imagen']}">
                {foreach $imagenes as $img}
                     <img src="{$img['imagen']}" class="d-block w-100" alt="Imagen del id: {$img['id_imagen']}">
                {/foreach}
              </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        {include file="vue/comentarios.tpl"}

        {include file="footer.tpl"}


        </body>
     </html>
