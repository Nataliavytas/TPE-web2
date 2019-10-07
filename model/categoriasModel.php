<?php
class categoriasModel{

  private $db;

function __construct(){

  $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
}
  //se conecta, hace la consulta y retorna las revistas.
function getCategorias(){
    $sentencia = $this->db->prepare("select * from categorias");
    $sentencia->execute();
    $cat = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $cat;
}
}
 ?>
