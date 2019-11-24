<!DOCTYPE html>
      <html>
      <body>

      {include file="header.tpl"}

      {foreach from=$detalle item=det}

      {* <div class="card" id="textoinicio">
         <div class="card-body">
            <h3 class="card-title"> {$det["titulo"]} </h3>
            <p class="card-text">Categoria: {$det["nombreCat"]}  </p>
            <p class="card-text">Fecha de publicacion: {$det["fecha"]} </p>
            <p class="card-text"> {$det["descripcion"]} </p>
             <label id="imagen"> {$det["imagen"]} </label>
            <a href="revistas" class="card-link"> Volver  </a>
         </div> 

      </div> *}
            <div id="textoinicio">
                <button id="descripcionAnchor" class="btn btn-light" type="button" data-toggle="collapse" 
                data-target="#collapse{$det['id_revistas']}" aria-expanded="false" aria-controls="multiCollapseExample2"> 
                {$det['titulo']} </button>
                    <div class="col">
                        <div class="collapse multi-collapse" id="collapse{$det['id_revistas']}">
                            <div class="card card-body">
                                <input  name="descripcion" type="text" value="{$det['descripcion']}"/>
                            </div>
                        </div>
                    </div>
            

            
                <button id="descripcionAnchor" class="btn btn-light" type="button" data-toggle="collapse" 
                data-target="#collapse{$det['id_revistas']}" aria-expanded="false" aria-controls="multiCollapseExample2"> 
                {$det['titulo']} </button>
                    <div class="col">
                        <div class="collapse multi-collapse" id="collapse{$det['id_revistas']}">
                            <div class="card card-body">
                                <input  name="descripcion" type="text" value="{$det['descripcion']}"/>
                            </div>
                        </div>
                    </div>
            


                <button id="descripcionAnchor" class="btn btn-light" type="button" data-toggle="collapse" 
                data-target="#collapse{$det['id_revistas']}" aria-expanded="false" aria-controls="multiCollapseExample2"> 
                {$det['titulo']} </button>
                    <div class="col">
                        <div class="collapse multi-collapse" id="collapse{$det['id_revistas']}">
                            <div class="card card-body">
                                <input  name="descripcion" type="text" value="{$det['descripcion']}"/>
                            </div>
                        </div>
                    </div>
            </div>


      {/foreach}

        {include file="footer.tpl"}

        </body>
     </html>
