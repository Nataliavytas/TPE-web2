<?php
/* Smarty version 3.1.33, created on 2019-10-17 23:16:48
  from 'C:\xampp\htdocs\TPE\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8da4015fa94_51272608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '672b3a3f6d6b7bf76bcb2a87921625d872db084d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\administrador.tpl',
      1 => 1571347006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da8da4015fa94_51272608 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html>

      <body>
       <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
      <div id="textoinicio">
       <form action="iniciarSesion" method="post">
         <div class="form-group">
           <label for="email">Email address:</label>
           <input type="email" class="form-control" name="email">
         </div>
         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
         </div>
            <button type="submit" value="submit" sclass="btn-success">Submit</button>
        </form>
                  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
