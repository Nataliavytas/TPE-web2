<?php
/* Smarty version 3.1.33, created on 2019-10-14 17:56:42
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da49abada3446_36187190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e504fa1c929dd60ae268654a52570e4990eae72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administrador.tpl',
      1 => 1571068599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:h2.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da49abada3446_36187190 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:h2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> Edicion de revistas. </h2>
        </div>

        <a href="admin/categorias" type="button" class="btn btn-primary btn-lg btn-block">Edicion Categorias</a>
        <a href="admin/revistas" type="button" class="btn btn-secondary btn-lg btn-block">Edicion Revistas</a>
      </div>
          

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
