<?php
/* Smarty version 3.1.33, created on 2019-10-14 17:52:49
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\categoriasTODASadmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da499d1dbaa56_55602163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3d28cf18e716fad33aae377a246ea105d25c89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\categoriasTODASadmin.tpl',
      1 => 1570897755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da499d1dbaa56_55602163 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="formatoTabla">
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
<?php }
}
