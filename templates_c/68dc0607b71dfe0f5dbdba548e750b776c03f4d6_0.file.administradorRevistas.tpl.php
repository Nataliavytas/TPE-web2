<?php
/* Smarty version 3.1.33, created on 2019-11-25 00:21:50
  from 'C:\xampp\htdocs\TPE\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb108e814560_31054558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68dc0607b71dfe0f5dbdba548e750b776c03f4d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\administradorRevistas.tpl',
      1 => 1574637493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddb108e814560_31054558 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>
      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> <a href="admin/revistas" type="button"  class="btn btn-outline-secondary" id="botonRevista">Revistas</a>
          Revistas publicadas
          <a href="admin/categorias" type="button" class="btn btn-outline-secondary" id="botonCategoria">Categorias</a> </h2>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
            <tr>
            <td> <a value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" href="admin/revista/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
 </a></td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</td>
  
            <td><button formaction="admin/borrar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" formmethod="POST" class="btn btn-secondary btn-sm" 
            type="submit" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"  href="admin/borrar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"> Borrar </button></td>

            </form>
             </tr>


            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </tbody>
            </table>
                </div>
        <form id="formview" action="admin/agregarRevista" method="post">

                  <div class="form-group">
                      <label> Titulo de Revista a publicar: </label>
                      <input value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
" name="titulo" type="text" class="form-control" id="nombreTabla" 
                      aria-describedby="emailHelp" placeholder="Titulo">
                  </div>
                  <div class="form-group">
                      <label> Descripción de la Revista: </label>
                      <input value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
" name="descripcion" type="text" class="form-control" id="autorTabla" 
                      aria-describedby="emailHelp" placeholder="Descripcion">
                  </div>
                  <div class="form-group">
                      <label> Fecha de publicación: </label>
                      <input value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
" name="fecha" type="text" class="form-control" id="tipoTabla" 
                      aria-describedby="emailHelp" placeholder="Año de publicación">
                  </div>
                  <div class="form-group">
                      <label for="inputState">Seleccione categoria:</label>
                      <select id="tipoFiltro" class="form-control" name="categoria">
                        <option> Seleccione  </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
 </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </select>
                         </div>
                   <div class="form-group">
                     <label> Imagen de revista: </label>
                       <input type="file" name="agregarImagen" id="imageToUpload">
                    </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                  </div>
              </form>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
