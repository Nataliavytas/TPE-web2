<?php

require_once("Router.php");
require_once("./controller/ComentariosController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$resource = $_GET["resource"];

$method = $_SERVER["REQUEST_METHOD"];

$router = new Router();

$router->addRoute("comentarios", "GET", "ComentariosController", "getComentarios");
$router->addRoute("comentarios", "POST", "ComentariosController", "addComentario"); 
$router->addRoute("comentarios/:ID", "DELETE", "ComentariosController", "deleteComentario");

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);