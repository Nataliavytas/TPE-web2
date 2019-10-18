<?php
require_once "controller/visitController.php";
require_once "controller/adminController.php";


$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
//<<<<<<< HEAD
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
//define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/admin');
//define('REVISTAS', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/revistas');
define("REVISTAS", BASE_URL . '/revistas');
define("lOGIN", BASE_URL . '/admin');
//=======
//>>>>>>> b85f5e1c405b33bf38c9be7bc5c2f5f6bcc0f594


$adminController = new adminController(); //Controlador del lado del administrador (lo que estabas haciendo vos)
$visitController = new visitController(); //Controlador del lado del usuario anonimo, toda la pagina menos lo que seria "administrador"
$partesURL = explode("/", $action);


if($action == ''){
    $visitController->Home();
}elseif ($action == 'inicio') {
    $visitController->Home();
}elseif ($action == 'revistas') {
    $visitController->getRevistas();
}elseif ($action == 'conseguirDetalle'){ //hay que cambiarlo a pretty url pero no quiero cambiarte todo y que te pierdas
    $visitController->mostrarDetalle();
}elseif ($action == 'admin'){
    $adminController->Home();
}else if ($action == 'admin/revistas'){
    $adminController->getRevistas();
}elseif ($action == 'admin/categorias'){
    $adminController->getCategorias();
}elseif ($action == 'iniciarSesion'){
    $adminController->iniciarSesion();
}
?>
