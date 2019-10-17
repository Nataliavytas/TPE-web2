<?php
/* Smarty version 3.1.33, created on 2019-10-17 15:00:50
  from 'C:\xampp\htdocs\TPE\templates\administradorCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da866025c8025_24395345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc41d33711a6f743e0cf9804d6656b8f0de2f8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\administradorCategorias.tpl',
      1 => 1571317100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da866025c8025_24395345 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <div id="textoinicio">
          <h2><a href="revistas" type="button" class="btn btn-outline-secondary">Revistas</a> Categorias publicadas <a href="categorias" type="button" class="btn btn-outline-secondary">Categorias</a></h2>
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

          <div id="formatoTabla">
          <table class="table table-bordered">
          <thead>
          <tr>
          <th scope="col"> Categorias </th>
          <th scope="col"> Borrar </th>
          <th scope="col"> Editar </th>
          </tr>
          </thead>
          <div id="textoinicio">
            <h2> Todas las categorias. </h2>
          </div>
          <tbody id="cuerpoTabla">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <tr>
          <td> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
</td>
          <form action="borrar" method="get">
          <td><button value="<?php echo $_smarty_tpl->tpl_vars['borrar']->value['id_categorias'];?>
" type="sudmit">Borrar</button></td>
          <td><button value="<?php echo $_smarty_tpl->tpl_vars['editar']->value['id_categorias'];?>
" formaction="editar" formmethod="post" type="sudmit">Editar</button></td>
          </form>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tr>

          </tbody>
          </table>
          </div>

                <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}