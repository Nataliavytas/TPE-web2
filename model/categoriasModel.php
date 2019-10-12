<?php
class categoriasModel{

  private $db;

function __construct(){

  $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
}
  //se conecta, hace la consulta y retorna las revistas.


function getRevistas(){
    $sentencia = $this->db->prepare( "SELECT * FROM revistas");
    $sentencia->execute();
    $revistas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $revistas;
}
function getCategorias(){
    $sentencia = $this->db->prepare("SELECT * FROM categorias");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    return $categorias;
}
}
 ?>
