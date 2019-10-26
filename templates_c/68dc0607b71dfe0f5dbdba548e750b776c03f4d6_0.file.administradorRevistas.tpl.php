<?php
/* Smarty version 3.1.33, created on 2019-10-26 00:36:14
  from 'C:\xampp\htdocs\TPE\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db378debbffe9_63226840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68dc0607b71dfe0f5dbdba548e750b776c03f4d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\administradorRevistas.tpl',
      1 => 1572042964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db378debbffe9_63226840 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>
  <base href="http://<?php echo $_SERVER['SERVER_NAME'];?>
:<?php echo $_SERVER['SERVER_PORT'];
echo dirname($_SERVER['PHP_SELF']);?>
/">
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
            <form action="admin/editar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" method="POST">
            <td> <p id ="p_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" onclick="swapTitle(<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
);"> 
            <?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
</p> 
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
" id="input_titulo_<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" style="display:none"> </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</td>
            
            <td><a value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"  href="borrar/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"> Borrar </a></td>
            
            <td><button type=submit> Editar </button></td>
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
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control" name="categoria"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
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
                }
                <?php echo '</script'; ?>
>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
