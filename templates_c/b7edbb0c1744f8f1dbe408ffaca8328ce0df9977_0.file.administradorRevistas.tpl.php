<?php
/* Smarty version 3.1.33, created on 2019-10-27 00:28:03
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db4c8737731e3_59648814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7edbb0c1744f8f1dbe408ffaca8328ce0df9977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administradorRevistas.tpl',
      1 => 1572128879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db4c8737731e3_59648814 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>
      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> <a href="revistas" type="button"  class="btn btn-outline-secondary" id="botonRevista">Revistas</a>
          Revistas publicadas
          <a href="categorias" type="button" class="btn btn-outline-secondary" id="botonCategoria">Categorias</a> </h2>

        </div>
            <div id="formatoTabla">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col"> Titulo </th>
            <th scope="col"> Descripción </th>
            <th scope="col"> Fecha </th>
            <th scope="col"> Borrar </th>
            <th scope="col"> Editar </th>
            </tr>
            </thead>
            <tbody id="cuerpoTabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
            <tr>
            <form action="editar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" method="POST">
            <td> <p id ="p_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" onclick="swapTitle(<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
);">
            <?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
</p>
            <input name="titulo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
" id="input_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" style="display:none"> </td>

            <td> <p id ="p2_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" onclick="swapTitle(<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
);">
            <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</p>
            <input name="descripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
" id="input2_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" style="display:none"> </td>

            <td> <p id ="p3_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" onclick="swapTitle(<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
);">
            <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</p>
            <input name="fecha" type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
" id="input_titulo3_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" style="display:none"> </td>

            <td><button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"  href="borrar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"> Borrar </button></td>

            <td><button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" href="editar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"> Editar </button></td>
            </form>
             </tr>


            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </tbody>
            </table>
                </div>
        <form id="formview" action="agregarRevista" method="post">
                  <div class="form-group">
                      <label> Titulo de Revista a publicar: </label>
                      <input name="titulo" type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
                  </div>
                  <div class="form-group">
                      <label> Descripción de la Revista: </label>
                      <input name="descripcion" type="text" class="form-control" id="autorTabla" placeholder="Descripcion">
                  </div>
                  <div class="form-group">
                      <label> Fecha de publicación: </label>
                      <input name="fecha" type="text" class="form-control" id="tipoTabla" placeholder="Mes de publicación">
                  </div>
                  <div class="form-group">
                      <label for="inputState">Seleccione categoria:</label>
                      <select id="tipoFiltro" class="form-control" name="categoria"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
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
                    <button type="submit" class="btn btn-primary">Insertar</button>
                  </div>
              </form>
              <?php echo '<script'; ?>
>
              function swapTitle(id){
                  document.getElementById('input_titulo_'+id).style.display = 'block';
                  document.getElementById('p_titulo_'+id).style.display = 'none';
                  document.getElementById('input2_titulo_'+id).style.display = 'block';
                  document.getElementById('p2_titulo_'+id).style.display = 'none';
                  document.getElementById('input_titulo3_'+id).style.display = 'block';
                  document.getElementById('p3_titulo_'+id).style.display = 'none';
              }
              <?php echo '</script'; ?>
>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
