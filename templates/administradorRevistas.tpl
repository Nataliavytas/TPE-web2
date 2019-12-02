<!DOCTYPE html>
        <html>
      <body >
       {include file="header.tpl"}

       <div id="textoinicio">
        <h2> Revistas actuales <a href="admin/revistas" type="button" class="btn btn-outline-secondary" id="botonRevistas">Revistas</a>
        <a href="admin/categorias" type="button" class="btn btn-outline-secondary" id="botonCategorias">Categorias</a>
         <a href="admin/usuarios" type="button" class="btn btn-outline-secondary" id="botonUsuarios">Usuarios</a> </h2>
        </div>

           <div class="container">
            <div id="formatoTabla">
            <form>
            <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col"> Titulo </th>
            <th scope="col"> Descripción </th>
            <th scope="col"> Fecha </th>
            </tr>
            </thead>
            <tbody id="cuerpoTabla">
            {foreach $revistas as $revista }
            <tr>
            <td> <a value="{$revista['id_revistas']}" href="admin/revista/{$revista['id_revistas']}">
            {$revista['titulo']} </a></td>
            <td> {$revista['descripcion']}</td>
            <td> {$revista['fecha']}</td>

            <td><button formaction="admin/borrar/{$revista['id_revistas']}" formmethod="POST" class="btn btn-secondary btn-sm"
            type="submit" value="{$revista['id_revistas']}"  href="admin/borrar/{$revista['id_revistas']}"> Borrar </button></td>

            </form>
             </tr>


            {/foreach}


            </tbody>
            </table>
                </div>
        <form id="formview" action="admin/agregarRevista" method="post" enctype="multipart/form-data" >

                  <div class="form-group">
                      <label> Titulo de Revista a publicar: </label>
                      <input value="{$revista['titulo']}" name="titulo" type="text" class="form-control" id="nombreTabla"
                      aria-describedby="emailHelp" placeholder="Titulo">
                  </div>
                  <div class="form-group">
                      <label> Descripción de la Revista: </label>
                      <input value="{$revista['descripcion']}" name="descripcion" type="text" class="form-control" id="autorTabla"
                      aria-describedby="emailHelp" placeholder="Descripcion">
                  </div>
                  <div class="form-group">
                      <label> Fecha de publicación: </label>
                      <input value="{$revista['fecha']}" name="fecha" type="text" class="form-control" id="tipoTabla"
                      aria-describedby="emailHelp" placeholder="Año de publicación">
                  </div>
                  <div class="form-group">
                      <label for="inputState">Seleccione categoria:</label>
                      <select id="tipoFiltro" class="form-control" name="categoria">
                        <option> Seleccione  </option>
                            {foreach from=$categorias item=categoria}
                            <option value="{$categoria['id_categorias']}"> {$categoria['nombreCat']} </option>
                            {/foreach}
                         </select>
                         </div>
                     <div class="form-group">
                              <label> Imagen de revista: </label>
                                  <div>
                                    <p class="text-muted"> Puede subir mas de una imagen por revista: </p>
                                    <input type="file" id="imagenes" name="agregarImagen[]" multiple>
                                    <p class="text-muted"> Recuerde subir una imagen con formato JPG </p>
                    <div class="form-group"
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                  </div>
              </form>
      {include file="footer.tpl"}
