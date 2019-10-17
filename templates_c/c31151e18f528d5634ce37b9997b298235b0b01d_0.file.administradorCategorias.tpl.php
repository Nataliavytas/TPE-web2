<?php
/* Smarty version 3.1.33, created on 2019-10-14 18:22:10
  from 'C:\xampp\htdocs\Proyecto\paginaWeb2\templates\administradorCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4a0b2605497_33092283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c31151e18f528d5634ce37b9997b298235b0b01d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb2\\templates\\administradorCategorias.tpl',
      1 => 1571068408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:categoriasTODASadmin.tpl' => 1,
  ),
),false)) {
function content_5da4a0b2605497_33092283 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2> Categorias publicadas. </h2>
        </div>

        <form id="formview" action="insertar" method="post">
            <div class="form-group">
                <label> categoria a publicar: </label>
                <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
        </form>

                <?php $_smarty_tpl->_subTemplateRender("file:categoriasTODASadmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
