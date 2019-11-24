<?php

  class imagenesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }

    function getImagenes($id){
      $sentencia = $this->db->prepare("SELECT * FROM imagenes WHERE id_revistas = ? ");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    function agregarImagen($imagen = null){
      $rutaImagen = null;
      if ($imagen)
       $rutaImagen = $this->cambioRuta($imagen);

        $sentencia = $this->db->prepare("INSERT INTO imagenes(imagen) VALUES(?)");
        $sentencia->execute(array($filepath));
    }
    function cambioRuta($imagen){
      $filepath = "images/revistas/" . uniqid() . "." . strtolower(pathinfo($imagen['agregarImagen']['name'], PATHINFO_EXTENSION));
      move_uploaded_file($imagen['agregarImagen']['tmp_name'], $filepath);
      return $filepath;
    }

}
?>
