<?php
require_once "controller/visitController.php";
require_once "controller/adminController.php";
require_once "controller/registroController.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define("REVISTAS", BASE_URL . 'admin/revistas');
define("CATEGORIAS", BASE_URL . 'admin/categorias');
define("USUARIOS", BASE_URL . 'admin/usuarios');
define("LOGIN", BASE_URL . 'admin');


$action = $_GET["action"];

$registroController = new registroController();
$adminController = new adminController(); //Controlador del lado del administrador (lo que estabas haciendo vos)
$visitController = new visitController(); //Controlador del lado del usuario anonimo, toda la pagina menos lo que seria "administrador"
$partesURL = explode("/", $action);



if($action == ''){
    $visitController->Home();
}elseif ($action == 'inicio') {
    $visitController->Home();

}elseif ($action == 'revistas') {
    $visitController->getRevistas();

}elseif ($partesURL[0] == 'revista'){
    $visitController->mostrarDetalle($partesURL[1]);

}elseif ($partesURL[0] == 'revistas'){
    $visitController->getRevistasPorCategoria($partesURL[1]);

}elseif ($action == 'admin'){
    $adminController->Home();

}elseif ($action == 'registro'){
    $registroController->registrarse();

}elseif ($action == 'agregarUsuario'){
    $registroController->agregarUsuario();

}else if ($action == 'admin/revistas'){
    $adminController->getRevistas();

}elseif ($action == 'admin/categorias'){
    $adminController->getCategorias();

}elseif ($action == 'iniciarSesion'){
    $adminController->iniciarSesion();

}elseif($action == 'admin/agregarRevista'){
    $adminController->agregarRevista();

}elseif($action == 'admin/agregarImagen'){
    $adminController->agregarImagen();

}elseif($partesURL[0] == "admin" && $partesURL[1] == "borrar" ) {
    $adminController->borrarRevista($partesURL[2]);

}elseif($partesURL[0] == "admin" && $partesURL[1] == "editar" ) {
    $adminController->editarRevista($partesURL[2]);

}elseif($action == "admin/agregarCategoria"){
    $adminController->agregarCategoria();

}elseif($partesURL[0] == "admin" && $partesURL[1] == "borrarCat" ) {
    $adminController->borrarCategoria($partesURL[2]);

}elseif($partesURL[0] == "admin" && $partesURL[1] == "editarCat" ) {
    $adminController->editarCategoria($partesURL[2]);

}elseif($action == "admin/logout" ){

    $adminController->logout();

}elseif ($partesURL[0] == "admin" && $partesURL[1] == "revista"){
    $adminController->getDetalleEdicion($partesURL[2]);

}elseif ($partesURL[0] == "admin" && $partesURL[1] == "usuarios"){
    $adminController->getUsuarios();

}elseif($partesURL[0] == "admin" && $partesURL[1] == "editarUsuario" ) {
    $adminController->editarUsuario($partesURL[2]);

}elseif($partesURL[0] == "admin" && $partesURL[1] == "borrarUsuario" ) {
    $adminController->borrarUsuario($partesURL[2]);

}
