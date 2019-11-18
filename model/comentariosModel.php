<?php

  class comentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }

    function getComentarios(){

      $sentencia = $this->db->prepare( "SELECT * FROM comentarios");
      $sentencia->execute();
      $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $comentarios;
    }

    function addComentario($idRevista, $comentario, $puntuacion){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(id_revistas, comentario, puntuacion) VALUE (?,?,?)");
        $sentencia->execute(array($idRevista, $comentario, $puntuacion));

        $last_id = $this->db->lastInsertId();
        return $last_id;
    }

    function deleteComentario($id){

        $sentencia = $this->db->prepare( "DELETE FROM comentarios WHERE id_comentario = ?");
        $sentencia->execute(array($id));
    }

    function getComentario($id){

        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id_comentario = ?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $comentario; 
    }
}