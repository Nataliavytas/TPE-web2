<?php
/* Smarty version 3.1.33, created on 2019-10-17 04:16:36
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administradorRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da7cf0477dd58_08423247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7edbb0c1744f8f1dbe408ffaca8328ce0df9977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administradorRevistas.tpl',
      1 => 1571278594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:revistasTODASadmin.tpl' => 1,
  ),
),false)) {
function content_5da7cf0477dd58_08423247 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2><a href="revistas" type="button" class="btn btn-outline-secondary">Revistas</a> Revistas publicadas <a href="categorias" type="button" class="btn btn-outline-secondary">Categorias</a></h2>

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
                 <button type="submit" class="btn btn-primary">Insertar</button>
              </div>
          </form>

                    <?php $_smarty_tpl->_subTemplateRender("file:revistasTODASadmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
