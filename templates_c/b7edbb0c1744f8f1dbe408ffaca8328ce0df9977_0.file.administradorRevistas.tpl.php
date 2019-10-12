<?php
/* Smarty version 3.1.33, created on 2019-10-12 17:10:57
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da1ed0172bd19_60856512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7edbb0c1744f8f1dbe408ffaca8328ce0df9977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administradorRevistas.tpl',
      1 => 1570893055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:revistasTODASadmin.tpl' => 1,
  ),
),false)) {
function content_5da1ed0172bd19_60856512 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> Edicion de revistas. </h2>
        </div>

          <form id="formview" action="insertar" method="post">
              <div class="form-group">
                  <label> Titulo de Revista a publicar: </label>
                  <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
              </div>
              <div class="form-group">
                  <label> Descripción de la Revista: </label>
                  <input type="text" class="form-control" id="autorTabla" placeholder="Descripcion">
              </div>
              <div class="form-group">
                  <label> Fecha de publicación: </label>
                  <input type="text" class="form-control" id="tipoTabla" placeholder="Mes de publicación">
              </div>
              <div class="form-group">
                  <label> Categoria de publicación: </label>
                  <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                      <option> Seleccione  </option>
                      <option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
 </option>
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

          
          <?php $_smarty_tpl->_subTemplateRender("file:revistasTODASadmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
