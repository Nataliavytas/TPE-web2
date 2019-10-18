<?php
class revistasModel{

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
function filtroFecha($filtro){
  $sentencia = $this->db->prepare("SELECT * FROM revistas WHERE id_revistas = ? AND id_revistas=fecha");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function filtroPorCategoria(){

  $sentencia= $this->db->prepare("SELECT * FROM revistas WHERE id_categoria = ?");
  $sentencia->execute(array($id));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);

} //trae de la tabla revistas, todas las revitas que sean de la categoria pasada por parametro

    function insertarRevista($titulo,$descripcion,$fecha,$categoria){
      $sentencia = $this->db->prepare("INSERT INTO revistas(titulo, descripcion, fecha, id_categorias) VALUES(?,?,?,?)");
      $sentencia->execute(array($titulo,$descripcion,$fecha,$categoria));
    }


    /* function borrarRevistas($id){
      $sentencia = $this->db->prepare("DELETE FROM db_revistas WHERE id_revistas=?");
      $sentencia->execute(array($id));
    } */
  
//filtros
//borrar/agregar/editar

/*function filtroid(){

  $sentencia = $this->db->prepare("SELECT categorias.*, revistas.titulo as categoria FROM categorias JOIN revistas on categorias.id_categoria = revistas.id_categoria");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_OBJ);
} */
}