<?php
/* Smarty version 3.1.33, created on 2019-10-25 03:21:47
  from 'C:\xampp\htdocs\TPE\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db24e2baddd77_57633467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4a69a5c4b27a1db29dbad5ec56f2e25d61afca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\detalle.tpl',
      1 => 1571940856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db24e2baddd77_57633467 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
               <div id="textoinicio">
              <h2> Detalle de revista seleccionada. </h2>
       </div>
       <div id="textoinicio">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'det');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['det']->value) {
?>
                <h4>Titulo: <?php echo $_smarty_tpl->tpl_vars['det']->value["titulo"];?>
</h4>
                <h5>Categoria: <?php echo $_smarty_tpl->tpl_vars['det']->value["nombreCat"];?>
 |</h5>
                <h5>Fecha: <?php echo $_smarty_tpl->tpl_vars['det']->value["fecha"];?>
 |</h5>
                <h5>Descripcion:</h5>
                <?php echo $_smarty_tpl->tpl_vars['det']->value["descripcion"];?>
<br>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </body>
     </html>
<?php }
}
