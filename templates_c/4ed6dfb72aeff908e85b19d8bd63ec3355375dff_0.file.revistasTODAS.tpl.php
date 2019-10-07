<?php
/* Smarty version 3.1.33, created on 2019-10-07 05:13:42
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\revistasTODAS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9aad666ae989_71373499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed6dfb72aeff908e85b19d8bd63ec3355375dff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\revistasTODAS.tpl',
      1 => 1570396846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9aad666ae989_71373499 (Smarty_Internal_Template $_smarty_tpl) {
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
