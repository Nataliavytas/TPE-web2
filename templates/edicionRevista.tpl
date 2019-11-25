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
            {/foreach}
            </table>
          </div>


             <label id="imagen"> {$det["imagen"]} </label>
{* 
            <ul> 
            {foreach from=$imagenes item=imagen}
            <li>
            <img src="???" class="img-thumbnail" alt="Cinque Terre" id={imagen.id_imagen}>
            <button> Borrar </button>
            </li>
            {/foreach}
            </ul 
            Esto es para que en un futuro se puedan eliminar las imagenes siendo administrador. Lo que no se es como se pasan desde
            el controller y eso, pero aca esta(? *} 

            <a href="revistas" class="card-link"> Volver  </a>

        {include file="footer.tpl"}

        </body>
     </html>
