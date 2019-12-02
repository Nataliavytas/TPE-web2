<!DOCTYPE html>
      <html>
      <body >

      {include file="header.tpl"}

        <div id="formatoTabla">
        <table class="table table-bordered">
           {foreach from=$detalle item=det}
        <tr>
            <form action="admin/editar/{$det['id_revistas']}" method="POST">
            <td>
              <a class="btn btn-light" data-toggle="collapse" href="#collapse{$det['id_revistas']}"
               role="button" aria-expanded="false" aria-controls="multiCollapseExample1"> {$det['titulo']} </a>
            <div class="row">
              <div class="col">
                <div class="collapse multi-collapse" id="collapse{$det['id_revistas']}">
                  <div class="card card-body">
                      <input name="titulo" type="text" value="{$det['titulo']}"/>
                  </div>
                </div>
              </div>
            </div>
            </td>

            <td>
              <button class="btn btn-light" type="button" data-toggle="collapse"
               data-target="#collapse{$det['id_revistas']}" aria-expanded="false" aria-controls="multiCollapseExample2">
               {$det['descripcion']} </button>
              <div class="col">
                <div class="collapse multi-collapse" id="collapse{$det['id_revistas']}">
                  <div class="card card-body">
                      <input  name="descripcion" type="text" value="{$det['descripcion']}"/>
                  </div>
                </div>
              </div>
              </div>
              </td>

            <td>
                <a class="btn btn-light" data-toggle="collapse" href="collapse{$det['id_revistas']}" role="button"
                aria-expanded="false"  data-target="#collapse{$det['id_revistas']}" aria-controls="multiCollapseExample3">
                {$det['fecha']}</a>
                  <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="collapse{$det['id_revistas']}">
                        <div class="card card-body">
                          <input name="fecha" type="text" value="{$det['fecha']}">
                        </div>
                      </div>
                    </div>
            </td>

            <td><button class="btn btn-secondary btn-sm" type="submit" value="{$det['id_revistas']}"
            href="admin/editar/{$det['id_revistas']}"> Editar </button></td>
            </form>
             </tr>
            </table>
           </div>
          {/foreach}

          {foreach $imagenes as $img}
          <form id="formview" action="admin/borrarIMG/{$img['id_imagen']}" method="POST">

            <ul>
              <li>
              <div class="container">
                  <div class="row">
                    <div class="col">
                      <img src="{$img['imagen']}" class="img-thumbnail" alt="Imagen por revista" value="{$img['id_imagen']}">
                      <button type="submit" class="btn btn-outline-secondary"  href="admin/borrarIMG/{$img['id_imagen']}"> Borrar </button>
                    </div>
                  </div>
                </div>
                {/foreach}
                </li>
            </ul>
        </form>

             {foreach $detalle as $det}
          <form id="formview" action="admin/agregarImagen" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label> Imagen de revista: </label>
                   <p class="text-muted"> Puede subir mas de una imagen por revista: </p>
                   <input type="file" id="imagenes" name="agregarImagen[]" multiple/>
                   <input type="hidden" id="id" name="id" value="{$id}">
                      <p class="text-muted"> Recuerde subir una imagen con formato JPG </p>
                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                      </div>
             </div>
           </form>
           {/foreach}

            <a href="admin/revistas" class="card-link"> Volver  </a>


        {include file="footer.tpl"}

        </body>
     </html>
