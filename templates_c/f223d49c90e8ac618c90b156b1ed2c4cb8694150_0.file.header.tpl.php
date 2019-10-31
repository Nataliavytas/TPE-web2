<?php
/* Smarty version 3.1.33, created on 2019-10-31 18:29:02
  from 'C:\xampp\htdocs\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb19de8fcbb6_03936054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f223d49c90e8ac618c90b156b1ed2c4cb8694150' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\header.tpl',
      1 => 1572542231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb19de8fcbb6_03936054 (Smarty_Internal_Template $_smarty_tpl) {
?> <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Minimalismo </title>

     <base href="http://<?php echo $_SERVER['SERVER_NAME'];?>
:<?php echo $_SERVER['SERVER_PORT'];
echo dirname($_SERVER['PHP_SELF']);?>
/">
     <link rel="stylesheet" href="../css/main.css">
     <link rel="stylesheet" href="./css/main.css">
     <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/css/bootstrap-grid.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>
    <link rel="icon" href="images/aguacate.png?v1" type="image/x-icon" />
<link rel="shortcut icon" href="images/aguacate.png?v1" type="image/x-icon" />
</head>


 <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="inicio" id="marcaMinimalismo"> MINIMALISMO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            id="navResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="admin"> Administrador </a> </li>
                    <a class="nav-link" data-value="about" href="revistas"> Revistas </a> </li>
  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="revistas" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cats');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->value) {
?>
<a class="dropdown-item" href="revistas/<?php echo $_smarty_tpl->tpl_vars['cats']->value['id_categorias'];?>
"><?php echo $_smarty_tpl->tpl_vars['cats']->value['nombreCat'];?>
</a>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
            </ul>
        </div>
    </nav>
<?php }
}
