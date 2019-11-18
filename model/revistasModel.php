<?php

  class revistasModel{

    private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
  }
  function revistas(){
    $sentencia = $this->db->prepare ("SELECT * FROM revistas");
    $sentencia->execute();
    $revistas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $revistas;
  }

  function getRevistas(){
      $sentencia = $this->db->prepare( "SELECT revistas.*, categorias.nombreCat FROM revistas, categorias WHERE categorias.id_categorias = revistas.id_categorias");
      $sentencia->execute();
      $revistas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $revistas;
  }

  function filtroPorCategoria($id){

    $sentencia= $this->db->prepare("SELECT * FROM revistas WHERE id_categorias = ?");
    $sentencia->execute(array($id));
    $revistas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $revistas;
   // var_dump($sentencia->errorInfo()); die;
  }

  function getDetalle($id){
    $sentencia = $this->db->prepare("SELECT revistas.*, categorias.nombreCat FROM revistas, categorias WHERE  revistas.id_categorias = categorias.id_categorias AND revistas.id_revistas = ?");
    $sentencia->execute(array($id));
    $revista = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $revista;
  }

  function insertarRevista($titulo,$fecha,$descripcion,$categoria){
    $sentencia = $this->db->prepare("INSERT INTO revistas(titulo, fecha, descripcion, id_categorias) VALUES(?,?,?,?)");
    $sentencia->execute(array($titulo,$fecha,$descripcion,$categoria));
    //var_dump($sentencia->errorInfo()); die;

  }
  function insertarComentario($nombreU, $fechaC, $comentarioC){
    $sentencia = $this->db->prepare("INSERT INTO comentarios(nombreUsuario, fechaComentario, comentario) VALUES(?,?,?)");
    $sentencia->execute(array($nombreU, $fechaC, $comentarioC));
    var_dump($sentencia->errorInfo()); die;
  }
    function borrarRevista($id){

      $sentencia = $this->db->prepare("DELETE FROM revistas WHERE id_revistas=?");
      $sentencia->execute(array($id));
    }

    function editarRevista( $titulo,$fecha,$descripcion, $id){
      $sentencia = $this->db->prepare("UPDATE revistas SET titulo=?, fecha=?, descripcion=? WHERE id_revistas=?");
      $sentencia->execute(array($titulo, $fecha, $descripcion, $id));
      //var_dump($sentencia->errorInfo()); die;
    }

    function getComentarios($id){
      $sentencia = $this->db->prepare("SELECT comentarios.* FROM comentarios, revistas WHERE comentarios.id_revistas = revistas.id_revistas AND comentarios.id_comentario = ?");
      $sentencia->execute(array($id));
      return  $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //  var_dump($sentencia->errorInfo()); die;
    }

  }
