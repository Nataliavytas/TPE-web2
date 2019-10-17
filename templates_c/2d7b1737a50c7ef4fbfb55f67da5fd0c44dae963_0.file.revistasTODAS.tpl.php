<?php
/* Smarty version 3.1.33, created on 2019-10-14 18:22:14
  from 'C:\xampp\htdocs\Proyecto\paginaWeb2\templates\revistasTODAS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4a0b69255e3_63386553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d7b1737a50c7ef4fbfb55f67da5fd0c44dae963' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb2\\templates\\revistasTODAS.tpl',
      1 => 1570458658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4a0b69255e3_63386553 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="formatoTabla">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col"> Titulo </th>
<th scope="col"> Descripción </th>
<th scope="col"> Fecha </th>
</tr>
</thead>
<tbody id="cuerpoTabla">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revistas']->value, 'revista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['revista']->value) {
?>
<tr>
<td> <a href="detalleRevistas/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revista'];?>
"><?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
 </a></td>
<td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['descripcion'];?>
</td>
<td> <?php echo $_smarty_tpl->tpl_vars['revista']->value['fecha'];?>
</td>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
</tbody>
</table>
</div>
<?php }
}
