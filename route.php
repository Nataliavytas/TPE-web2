<?php
require_once "controller/visitController.php";
require_once "controller/adminController.php";


$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$adminController = new adminController(); //Controlador del lado del administrador (lo que estabas haciendo vos)
$visitController = new visitController(); //Controlador del lado del usuario anonimo, toda la pagina menos lo que seria "administrador"
$partesURL = explode("/", $action);


if($action == ''){
    $visitController->Home();
}elseif ($action == 'inicio') {
    $visitController->Home();
}elseif ($action == 'revistas') {
    $visitController->getRevistas();
}elseif ($action == './detalleView.php'){ //hay que cambiarlo a pretty url pero no quiero cambiarte todo y que te pierdas
    $visitController->detalleCategorias();
}else if ($action == 'admin/revistas'){
    $adminController->getRevistas();
}elseif ($action == 'admin/categorias')
?>
