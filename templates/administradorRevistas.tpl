<!DOCTYPE html>
        <html>
      <body>
       {include file="headerAdmin.tpl"}

       <div id="textoinicio">
          <h2> <a href="admin/revistas" type="button"  class="btn btn-outline-secondary" id="botonRevista">Revistas</a>
          Revistas publicadas
          <a href="admin/categorias" type="button" class="btn btn-outline-secondary" id="botonCategoria">Categorias</a> </h2>

        </div>
            <div id="formatoTabla">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col"> Titulo </th>
            <th scope="col"> Descripción </th>
            <th scope="col"> Fecha </th>
            <th scope="col"> edicion de revista </th>
            </tr>
            </thead>
            <tbody id="cuerpoTabla">
            {foreach $revistas as $revista }
            <tr>
            <form action="admin/editar/{$revista['id_revistas']}" method="POST">

            <td> {$revista['titulo']} </td>

            <td>  {$revista['descripcion']}</td>

            <td>{$revista['fecha']}</td>

            <td><button  name="detalleEdicion" class="btn btn-secondary btn-sm" type="button" value="{$revista['id_revistas']}"  href="admin/detalleEdicion/{$revista['id_revistas']}"> Edicion Revista </button></td>

             </tr>


            {/foreach}


            </tbody>
            </table>
                </div>
        <form id="formview" action="admin/agregarRevista" method="post">

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
                       <input class="form-control" type="file" name="agregarImagen" id="imageToUpload">
                       <div>
                         <button type="button" class="btn btn-default" id="show">Agregar mas de una imagen: </button>
                            <div class="input">
                             <input class="1" class="form-control" type="file" name="agregarImagen" >
                             <input class="1" class="form-control" type="file" name="agregarImagen" >
                         </div>
                       </div>
                       <p class="text-muted"> Recuerde subir una imagen con formato JPG </p>
                    </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                  </div>
              </form>
      {include file="footer.tpl"}
