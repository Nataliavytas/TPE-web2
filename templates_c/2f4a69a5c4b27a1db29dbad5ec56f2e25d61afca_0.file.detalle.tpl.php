<?php
/* Smarty version 3.1.33, created on 2019-11-01 16:47:53
  from 'C:\xampp\htdocs\TPE\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc53a9503769_06987445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4a69a5c4b27a1db29dbad5ec56f2e25d61afca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\detalle.tpl',
      1 => 1572622165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbc53a9503769_06987445 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
      <html>
      <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'det');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['det']->value) {
?>
      <div class="card" id="textoinicio">
        
         <div class="card-body">
            <h3 class="card-title"> <?php echo $_smarty_tpl->tpl_vars['det']->value["titulo"];?>
 </h3>
            <p class="card-text">Categoria: <?php echo $_smarty_tpl->tpl_vars['det']->value["nombreCat"];?>
  </p>
            <p class="card-text">Fecha de publicacion: <?php echo $_smarty_tpl->tpl_vars['det']->value["fecha"];?>
 </p>
            <p class="card-text"> <?php echo $_smarty_tpl->tpl_vars['det']->value["descripcion"];?>
 </p>
            <a href="revistas" class="card-link"> Volver  </a>
         </div>
         
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </body>
     </html>
<?php }
}
