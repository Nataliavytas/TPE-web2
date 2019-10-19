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
          <td> {$categoria['nombreCat']}</td>
          <form action="borrar" method="get">
          <td><button value="{$borrar['id_categorias']}" type="sudmit">Borrar</button></td>
          <td><button value="{$editar['id_categorias']}" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
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
        {include file="footer.tpl"}
