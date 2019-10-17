<?php
/* Smarty version 3.1.33, created on 2019-10-17 07:44:00
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\revistasTODAS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da7ffa09aa068_48671893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed6dfb72aeff908e85b19d8bd63ec3355375dff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\revistasTODAS.tpl',
      1 => 1571291025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da7ffa09aa068_48671893 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="formatoTabla">
  <form action="showDetalle" method="get">
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
<td> <button name="conseguirDetalle" value="<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
" href="detalleRevistas/<?php echo $_smarty_tpl->tpl_vars['revista']->value['id_revistas'];?>
"><?php echo $_smarty_tpl->tpl_vars['revista']->value['titulo'];?>
 </button></td>
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
</form>
</div>
<?php }
}
