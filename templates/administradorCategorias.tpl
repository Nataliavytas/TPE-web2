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
                      <td>  <p><a class="btn btn-light" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">{$categoria['nombreCat']}</a></p>
                          <div class="row">
                            <div class="col">
                              <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                  <input type="text" name="editaCategoria" value="{$categoria['nombreCat']}">
                                </div>
                              </div>
                            </div></td>


                          <td> <button class="btn btn-secondary btn-sm" type="submit" value="{$categoria['id_categorias']}" href="editarCat/{$categoria['id_categorias']}" > Editar</button></td>
                          <td> <button class="btn btn-secondary btn-sm" type="submit" value="{$categoria['id_categorias']}" href="borrarCat/{$categoria['id_categorias']}" formmethod="DELETE" formaction="borrarCat">Borrar </button></td>
                      </div>
                </form>
                {/foreach}
                </tr>
                  </tbody>
                 </table>
          </div>
        </div>

           <form id="formview" action="agregarCategoria" method="post">
            <div class="form-group">
                <label> Agregar nueva categoria: </label>
                <input name="nombreCat" type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-outline-secondary">Insertar</button>
            </div>
        </form>
        {include file="footer.tpl"}
