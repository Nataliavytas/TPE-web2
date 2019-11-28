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


         {*      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                          {foreach from=$imagenes item=imgs}
                    <div class="carousel-item active">
                      <img src="..." class="d-block w-100" alt="...">{$imgs['imagen']}
                    </div>

                    <div class="carousel-inner">
            <div class="carousel-item active ">
              <img class="d-block w-100 gameImg" src="{$imgs[0]['imagen']}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 gameImg" src="{$imgs[1]['imagen']}" alt="Second slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100 gameImg" src="{$imgs[2]['imagen']}" alt="Third slide">
            </div>
          </div>
                          {/foreach}
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>*}
               </label>
         </div>

      </div>
      {/foreach}
        {include file="vue/comentarios.tpl"}

        {include file="footer.tpl"}


        </body>
     </html>
