<!DOCTYPE html>
      <html>
      <body>

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


            {*aca puse este action aunque creo que deberia tener ser admin/borrarIMG/{$det['id_revista']} asi evitamos que borre la revista! Y solo borre la imagen*}
            <form id="formview" action="admin/borrar/{$det['id_revistas']}" method="post">
             <label id="imagen"> {$det["imagen"]} </label>
            <ul>

            <li>
              <div class="container">
                  <div class="row">
                    <div class="col">
                      {foreach from=$imagenes item=imagen}
                      <img src="{$imagen['id_imagen']}" class="img-thumbnail" alt="Imagen por revista" value="{$imagen['id_imagen']}">
                      <button type="submit" value="{$det['id_revistas']}"  href="admin/borrar/{$det['id_revistas']}"> Borrar </button>
                      {/foreach}
                      {/foreach}{*es el foreach de $det*}


                      {*agregue informacion al <button> asi funcionaba para borrar*}
                    </div>
                  </div>
                </div>

            </li>

          </ul>
        </form>
            {* Esto es para que en un futuro se puedan eliminar las imagenes siendo administrador. Lo que no se es como se pasan desde
            el controller y eso, pero aca esta(? *}

          <form id="formview" action="admin/agregarImagen" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label> Imagen de revista: </label>
                  {* <div>
                   <input class="form-control" type="file" name="agregarImagen[]" id="imageToUpload" multiple>
                    <div>  *}
                      <select id="tipoFiltro" class="form-control" name="revista">
                        <option> Seleccione la revista correspondiente: </option>
                            {foreach from=$revistas item=revista}
                            <option value="{$revista['id_revista']}"> {$revista['titulo']} </option>
                            {/foreach}
                         </select>
                       </div>
                  </div>
                      <p class="text-muted"> Recuerde subir una imagen con formato JPG </p>
                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                      </div>
             </div>
           </form>
            <a href="revistas" class="card-link"> Volver  </a>

        
        {include file="footer.tpl"}

        </body>
     </html>
