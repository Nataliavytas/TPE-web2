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
    $sentencia = $this->db->prepare("SELECT revistas.*, categorias.nombreCat FROM revistas, categorias WHERE  revistas.id_categorias = categorias.id_categorias AND revistas.id_revistas = ?");
    $sentencia->execute(array($id));
    $revista = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $revista;
  }

  function insertarRevista($titulo,$fecha,$descripcion,$categoria){
    $sentencia = $this->db->prepare("INSERT INTO revistas(titulo, fecha, descripcion, id_categorias) VALUES(?,?,?,?)");
    $sentencia->execute(array($titulo,$fecha,$descripcion,$categoria));

  }
    function borrarRevista($id){

      $sentencia = $this->db->prepare("DELETE FROM revistas WHERE id_revistas=?");
      $sentencia->execute(array($id));
     // var_dump($sentencia->errorInfo()); die;
    } 

    function editarRevista( $titulo,$fecha,$descripcion,$categoria, $id){
      $sentencia = $this->db->prepare("UPDATE FROM revistas SET titulo=?, fecha=?, descripcion=?, categoria=? WHERE id_revistas=?");
      $sentencia->execute(array($titulo, $fecha, $descripcion, $categoria, $id));
    }
  }