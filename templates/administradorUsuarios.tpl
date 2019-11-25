<!DOCTYPE html>
        <html>

      <body>
     {include file="headerAdmin.tpl"}
    <div id="formatoTabla">
            <table class="table table-bordered">
                  <thead>
                    <tr>
                       <th scope="col"> Nombre de usuario </th> 
                      <th scope="col"> Email </th>
                      <th scope="col"> Tipo de cuenta </th>
                      <th scope="col"> Borrar </th>
                    </tr>
                  </thead>
                  <tbody id="cuerpoTabla">
                    {foreach $usuarios as $usuario }
                    <tr>
                    <form action="admin/editarUsuario/{$usuario['id']}" method="POST">
                      <div>
                      <td> {$usuario['email']} </td>

                        <td>  
                          {if $usuario['tipo_usuario'] == '0'}
                            <select class="form-control" name="tipoCuenta">
                            
                              <option value="0" selected="selected"> Usuario </option>
                              <option value="1"> Administrador </option>
                            
                            </select>
                          {else}

                            <select class="form-control" name="tipoCuenta">
                            
                              <option value="0"> Usuario </option>
                              <option value="1" selected="selected"> Administrador </option>
                            
                            </select>
                          {/if}
                        </td>
    


                          <td> <button class="btn btn-secondary btn-sm" type="submit" value="{$usuario['id']}" href="admin/editarUsuario/{$usuario['id']}" > Editar</button></td>
                          <td> <button class="btn btn-secondary btn-sm" type="submit" value="{$usuario['id']}"> <a href="admin/borrarUsuario/{$usuario['id']}"> Borrar </a> </button></td>
                      </div>
                </form>
                {/foreach}
                </tr>
                  </tbody>
                 </table> 
        </div>




     {include file="footer.tpl"}
