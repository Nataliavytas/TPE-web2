<?php

  class revistasModel{

    private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
  }

  function getRevistas(){
      $sentencia = $this->db->prepare( "SELECT * FROM revistas");
      $sentencia->execute();
      $revistas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $revistas;
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

  /*

    function borrarRevistas($id){
      $sentencia = $this->db->prepare("DELETE FROM revistas WHERE id_revistas=?");
      $sentencia->execute(array($id));
    } 
  
    } */
//borrar/agregar/editar
}