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
function filtroPorCategoria(){

  $sentencia= $this->db->prepare("SELECT * FROM revistas WHERE id_categoria = ?");
  $sentencia->execute(array($id));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);

} //trae de la tabla revistas, todas las revitas que sean de la categoria pasada por parametro
function getDetalle($id){
  //$sentencia = $this->db->prepare("SELECT revistas.* categorias.nombreCat FROM revistas, categorias WHERE revistas.id_revistas = ? and revistas.id_categorias = categorias.id_categorias");
  $sentencia = $this->db->prepare("SELECT * FROM revistas WHERE id_revistas = ?");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function insertarRevista($titulo,$fecha,$descripcion,$categoria){

  $sentencia = $this->db->prepare("INSERT INTO revistas(titulo, fecha, descripcion, id_categorias) VALUES(?,?,?,?)");
  $sentencia->execute(array($titulo,$fecha,$descripcion,$categoria));
}
/*function filtroid(){

  $sentencia = $this->db->prepare("SELECT categorias.*, revistas.titulo as categoria FROM categorias JOIN revistas on categorias.id_categoria = revistas.id_categoria");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_OBJ);
}



    function insertarRevistas($titulo,$descripcion,$fecha){
      $sentencia = $this->db->prepare("INSERT INTO db_revistas(titulo, descripcion, fecha) VALUES(?,?,?)");
      $sentencia->execute(array($titulo,$descripcion,$fecha));
    }

    function borrarRevistas($id){
      $sentencia = $this->db->prepare("DELETE FROM revistas WHERE id_revistas=?");




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
