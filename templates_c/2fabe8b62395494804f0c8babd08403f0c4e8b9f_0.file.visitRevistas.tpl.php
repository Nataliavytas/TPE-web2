<?php
/* Smarty version 3.1.33, created on 2019-10-31 18:29:05
  from 'C:\xampp\htdocs\TPE\templates\visitRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb19e154c062_16839240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fabe8b62395494804f0c8babd08403f0c4e8b9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\visitRevistas.tpl',
      1 => 1572542231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb19e154c062_16839240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <div id="textoinicio">
              <h2> Revistas publicadas </h2>
              </div>
       <div class="container">
            <div id="formatoTabla">
            <form action="showDetalle" method="get">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col"> Titulo </th>
            <th scope="col"> Descripción </th>
            <th scope="col"> Fecha </th>
            <th scope="col"> Categoria </th>
            </tr>
            </thead>
            <tbody id="cuerpoTabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
            <tr>
            <td> <a name="conseguirDetalle" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" href="revista/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"><?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
 </a></td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['nombreCat'];?>
 </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            </tbody>
            </table>
            </form>
            </div>
       </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </body>
     </html>
<?php }
}
