<?php

  class imagenesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }


    function getImagen(){ //Cree esta nueva proque no puedo usar la de abajo, ya que tiene muchos argumentos ($ID) que no se usan en la otra funcion.
      $sentencia = $this->db->prepare("SELECT * FROM imagenes");
      $sentencia->execute(array());
      //    var_dump($sentencia->errorInfo()); die;
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getImagenes($id){
      $sentencia = $this->db->prepare("SELECT * FROM imagenes WHERE id_revistas = ? ");
      $sentencia->execute(array($id));
      //    var_dump($sentencia->errorInfo()); die;
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function agregarImagen($imagen = null, $id_revista){
      $rutaImagen = null;
      if ($imagen != null)
       $rutaImagen = $this->cambioRuta($imagen);
        $sentencia = $this->db->prepare("INSERT INTO imagenes(imagen, id_revista) VALUES(?,?)");
      //  var_dump($sentencia->errorInfo()); die();
        foreach($_FILES["agregarImagen"]["tmp_name"] as $key => $tmp_name){
            $filepath = "images/revistas".uniqid().".jpg";
            move_uploaded_file($tmp_name, $filepath);
            $sentencia->execute([$id_revista]);}
            //falta repartir esta funcion en dos, una publica y otra privada.
        }

    function cambioRuta($imagen){
      $filepath = "images/revistas/" . uniqid() . "." . strtolower(pathinfo($imagen['agregarImagen']['name'], PATHINFO_EXTENSION));
      move_uploaded_file($imagen['agregarImagen']['tmp_name'], $filepath);
      return $filepath;
    }
  }