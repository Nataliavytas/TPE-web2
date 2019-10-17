<?php
/* Smarty version 3.1.33, created on 2019-10-14 18:22:14
  from 'C:\xampp\htdocs\Proyecto\paginaWeb2\templates\visitRevistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4a0b6772127_52721928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61166ffa677b24f8a918dabb0c7de7d0c62d83f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb2\\templates\\visitRevistas.tpl',
      1 => 1570899144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:revistasTODAS.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da4a0b6772127_52721928 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <div id="textoinicio">
              <h2> Revistas publicadas </h2>
              </div>
              <form id="formview" action="insertar" name="SeleccionFecha" method="get">
                  <div class="form-group">
                      <label for="inputState">Filtrar por:</label>
                      <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                        <option> Seleccione  </option>


          <option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
 </option>
          </option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </select>
       </div>
       </form>


       <div class="container">
                <?php $_smarty_tpl->_subTemplateRender("file:revistasTODAS.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </body>
     </html>
<?php }
}
