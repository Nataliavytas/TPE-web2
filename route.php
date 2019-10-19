<?php
require_once "controller/visitController.php";
require_once "controller/adminController.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define("REVISTAS", BASE_URL . 'admin/revistas');
define("CATEGORIAS", BASE_URL . 'admin/categorias');
define("LOGIN", BASE_URL . 'admin');

$action = $_GET["action"];

$adminController = new adminController(); //Controlador del lado del administrador (lo que estabas haciendo vos)
$visitController = new visitController(); //Controlador del lado del usuario anonimo, toda la pagina menos lo que seria "administrador"
$partesURL = explode("/", $action);


if($action == ''){
    $visitController->Home();
}elseif ($action == 'inicio') {
    $visitController->Home();

}elseif ($action == 'revistas') {
    $visitController->getRevistas();

}elseif ($action == 'revista'){ 
    $visitController->mostrarDetalle($partesURL[1]);

}elseif ($action == 'admin'){
    $adminController->Home();

}else if ($action == 'admin/revistas'){
    $adminController->getRevistas();

}elseif ($action == 'admin/categorias'){
    $adminController->getCategorias();

}elseif ($action == 'iniciarSesion'){
    $adminController->iniciarSesion();

}elseif($action == 'admin/agregarRevista'){
    $adminController->agregarRevista();

 }elseif($partesURL[0] == "admin" && $partesURL[1] == "borrar" ) {
    $adminController->borrarRevista($partesURL[2]);

}elseif($partesURL[0] == "admin" && $partesURL[1] == "editar" ) {
    $adminController->editarRevista($partesURL[2]);

}elseif($action == "admin/agregarCategoria"){
    $adminController->agregarCategoria();
}

