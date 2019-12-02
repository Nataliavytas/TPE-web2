<?php
class categoriasModel{

  private $db;

    function __construct(){
      $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }

    function getCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM categorias");
        $sentencia->execute();
        $cat = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $cat;
    }

    function agregarCategoria($nombreCat){
        $sentencia = $this->db->prepare("INSERT INTO categorias(nombreCat) VALUE(?)");
        $sentencia->execute(array($nombreCat));
    }

    function borrarCategoria($id){

        $sentencia = $this->db->prepare("DELETE FROM categorias WHERE id_categorias=?");
        $sentencia->execute(array($id));
    }
    function editarCategoria($id, $titulo){
        $sentencia = $this->db->prepare("UPDATE categorias SET nombreCat=? WHERE id_categorias=?");
        $sentencia->execute([$titulo, $id]);
        //var_dump($sentencia->errorInfo()); die;
    }
      // var_dump($sentencia->errorInfo()); die;
  }
