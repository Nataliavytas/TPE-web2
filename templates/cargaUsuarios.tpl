<!DOCTYPE html>
        <html>

      <body>
       {include file="header.tpl"}
       
    <div id="textoinicio">
          <form action="agregarUsuario" method="post">
          <div class="form-group">
              <label for="email">Ingrese un email address:</label>
              <input name="email" class="form-control" id="email">
              <small class="form-text text-muted">Registrese con su Email</small>
            </div>

            <div class="form-group">
                <label for="password">Ingrese una contraseña:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label class="label" for="exampleInputPassword1">Repita su contraseña: </label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="repetirPassword">
              <small class="form-text text-muted">{$error}</small>
              {debug}
              </div>
                <button type="submit" value="login" sclass="btn-success">Submit</button>
            </form>
            <small class="form-text text-muted">Recuerde que registrarse no lo convierte en Usuario con privilegios. Contactese con el Administrador.</small>
            </div>

{include file="footer.tpl"}
