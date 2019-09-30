<?php
class revistasModel{

  private $db;

function __construct(){

  $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_minimalismo;charset=utf8' , 'root' , '');
}
  //se conecta, hace la consulta y retorna las revistas.


function getRevistas(){
    $sentencia = $this->db->prepare( "SELECT * FROM revistas");
    $sentencia->execute();
    $revistas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $revistas;
}

function filtroPorCategoria(){

  $sentencia= $this->db->prepare("SELECT * FROM revistas WHERE id_categoria = ?");
  $sentencia->execute(array($id));
  return $sentencia->fetchAll(PDO::FETCH_OBJ);

} //trae de la tabla revistas, todas las revitas que sean de la categoria pasada por parametro

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
      $sentencia = $this->db->prepare("DELETE FROM db_revistas WHERE id_revistas=?");
      $sentencia->execute(array($id));
    }
  */
//filtros
//borrar/agregar/editar
}
 ?>
