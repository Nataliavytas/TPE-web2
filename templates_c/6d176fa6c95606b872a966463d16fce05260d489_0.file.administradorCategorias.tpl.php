<?php
/* Smarty version 3.1.33, created on 2019-10-27 00:31:04
  from 'C:\xampp\htdocs\Proyecto\paginaWeb\templates\administradorCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db4c928e83513_58907466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d176fa6c95606b872a966463d16fce05260d489' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\paginaWeb\\templates\\administradorCategorias.tpl',
      1 => 1572129063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db4c928e83513_58907466 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="textoinicio">
        <h2> <a href="revistas" type="button" class="btn btn-outline-secondary" id="botonRevistas">Revistas</a> Categorias actuales  <a href="categorias" type="button" class="btn btn-outline-secondary" id="botonCategorias">Categorias</a> </h2>
        </div>


          <div id="formatoTabla">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"> Categorias </th>
                      <th scope="col"> Borrar </th>
                      <th scope="col"> Editar </th>
                    </tr>
                  </thead>
                  <tbody id="cuerpoTabla">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                    <tr>
                    <form  action="editarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" method="POST">
                      <div>
                          <td> <p id ="p_titulo_<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" onclick="swapTitle(<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
)">
                          <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
</p>
                          <input type="text" name="editaCategoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombreCat'];?>
" id="cat_titulo_<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" style="display:none"> </td>
                        </div>
                          <td> <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" href="editarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" > Editar</button></td>
                          <td> <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" href="borrarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categorias'];?>
" formmethod="DELETE" formaction="borrarCat">Borrar </button></td>
                </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
                  </tbody>
                 </table>
          </div>

           <form id="formview" action="agregarCategoria" method="post">
            <div class="form-group">
                <label> Agregar nueva categoria: </label>
                <input name="nombreCat" type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
        </form>
        <?php echo '<script'; ?>
>

        function swapTitle(id){
            document.getElementById('cat_titulo_'+id).style.display = 'block';
            document.getElementById('p_titulo_'+id).style.display = 'none';
        }
      <?php echo '</script'; ?>
>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
