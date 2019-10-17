<!DOCTYPE html>
        <html>

      <body>
       {include file="h2.tpl"}

       <div id="textoinicio">
          <h2> Edicion de revistas. </h2>
        </div>

       <form action="iniciarSesion" method="post">
         <div class="form-group">
           <label for="email">Email address:</label>
           <input type="email" class="form-control" name="email">
         </div>
         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
         </div>
            <button type="submit" value="submit" sclass="btn-success">Submit</button>
        </form>
          {*Tabla inferior donde van a estar ubicadas las revistas.
          #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
          #quien trae info de mysql. *}


{include file="footer.tpl"}
