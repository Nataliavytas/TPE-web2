<!DOCTYPE html>
        <html>

      <body>
       {include file="headerAdmin.tpl"}

       <div id="textoinicio">
          <h2> Edicion de revistas. </h2>
        </div>

        <a href="admin/categorias" type="button" class="btn btn-primary btn-lg btn-block">Edicion Categorias</a>
        <a href="admin/revistas" type="button" class="btn btn-secondary btn-lg btn-block">Edicion Revistas</a>
      </div>
          {*Tabla inferior donde van a estar ubicadas las revistas.
          #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
          #quien trae info de mysql. *}


{include file="footer.tpl"}
