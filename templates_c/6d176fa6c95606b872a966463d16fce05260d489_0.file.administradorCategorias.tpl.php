<?php
/* Smarty version 3.1.33, created on 2019-10-12 18:23:51
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administradorCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da1fe1763aa09_53022286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d176fa6c95606b872a966463d16fce05260d489' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administradorCategorias.tpl',
      1 => 1570897262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:categoriasTODASadmin.tpl' => 1,
  ),
),false)) {
function content_5da1fe1763aa09_53022286 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> Edicion de Categorias. </h2>
        </div>
          <form id="formview" action="insertar" method="post">
              <div class="form-group">
                  <label> Titulo de categoria: </label>
                  <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-primary">Insertar</button>
              </div>
          </form>

          
          <?php $_smarty_tpl->_subTemplateRender("file:categoriasTODASadmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

*}
<?php }
}
