<!DOCTYPE html>
        <html>

      <body>
       {include file="headerAdmin.tpl"}

        <div id="textoinicio">
        <h2> <a href="revistas" type="button" class="btn btn-outline-secondary" id="botonRevistas">Revistas</a> Categorias actuales  <a href="categorias" type="button" class="btn btn-outline-secondary" id="botonCategorias">Categorias</a> </h2>
        </div>


          <div id="formatoTabla">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"> Categorias </th>
                      <th scope="col"> Borrar </th>
                      <th scope="col"> Editar </th>
                    </tr>
                  </thead>
                  <tbody id="cuerpoTabla">
                    {foreach $categorias as $categoria }
                    <tr>
                    <form  action="editarCat/{$categoria['id_categorias']}" method="POST">
                      <div>
                          <td> <p id ="p_titulo_{$categoria['id_categorias']}" onclick="swapTitle({$categoria['id_categorias']})">
                          {$categoria['nombreCat']}</p>
                          <input type="text" name="editaCategoria" value="{$categoria['nombreCat']}" id="cat_titulo_{$categoria['id_categorias']}" style="display:none"> </td>
                        </div>
                          <td> <button type="submit" value="{$categoria['id_categorias']}" href="editarCat/{$categoria['id_categorias']}" > Editar</button></td>
                          <td> <button type="submit" value="{$categoria['id_categorias']}" href="borrarCat/{$categoria['id_categorias']}" formmethod="DELETE" formaction="borrarCat">Borrar </button></td>
                </form>
                {/foreach}
                </tr>
                  </tbody>
                 </table>
          </div>

           <form id="formview" action="agregarCategoria" method="post">
            <div class="form-group">
                <label> Agregar nueva categoria: </label>
                <input name="nombreCat" type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
        </form>
        <script>

        function swapTitle(id){
            document.getElementById('cat_titulo_'+id).style.display = 'block';
            document.getElementById('p_titulo_'+id).style.display = 'none';
        }
      </script>
        {include file="footer.tpl"}
