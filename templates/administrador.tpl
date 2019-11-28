<!DOCTYPE html>
        <html>

      <body>

      <div id="textoinicio">
       <form action="iniciarSesion" method="post">
       <div class="form-group">
           <label for="email">Email address:</label>
           <input name="email" class="form-control" id="email">
         </div>

         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
         </div>
          {*  <button type="submit" value="login" sclass="btn-success">Submit</button>*}
            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
            <button type="button" class="btn btn-secondary btn-lg" ><a href="registro">No es usuario? Registrese!</a></button>
        </form>
          {*Tabla inferior donde van a estar ubicadas las revistas.
          #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
          #quien trae info de mysql. *}
        </div>
