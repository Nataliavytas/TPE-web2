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

  }

    function getDetalle($id){
      $imagenRevistas = [];
      $sentencia = $this->db->prepare("SELECT revistas.*, categorias.nombreCat FROM revistas, categorias WHERE  revistas.id_categorias = categorias.id_categorias AND revistas.id_revistas = ?");
      $sentencia->execute(array($id));
      $revista = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $imagenes = $revista;
            return $revista;
  
  }

  function insertarRevista($titulo,$fecha,$descripcion,$categoria, $imagenes){
    $sentencia = $this->db->prepare("INSERT INTO revistas(titulo, fecha, descripcion, id_categorias) VALUES(?,?,?,?)");
    $sentencia->execute(array($titulo,$fecha,$descripcion,$categoria));
    $id_revistas = $this->db->lastInsertId();
    $rutas = $this->subirImagenes($imagenes);
    $sentencia_imagenes = $this->db->prepare("INSERT INTO imagenes(id_revistas, imagen) VALUES (?,?)");
    foreach($rutas as $ruta){
      $sentencia_imagenes->execute([$id_revistas, $ruta]);
      
    }
  }
  
          private function subirImagenes($imagenes){
            $rutas = [];
            foreach ($imagenes as $imagen) {
              $destino_final = 'images/revistas' . uniqid() . '.jpg';
              move_uploaded_file($imagen, $destino_final);
              $rutas[]=$destino_final;
            }
            return $rutas;
          }

    function borrarRevista($id){
      $sentencia = $this->db->prepare("DELETE FROM revistas WHERE id_revistas=?");
      $sentencia->execute(array($id));
    }

    function editarRevista( $titulo,$fecha,$descripcion, $id){
      $sentencia = $this->db->prepare("UPDATE revistas SET titulo=?, fecha=?, descripcion=? WHERE id_revistas=?");
      $sentencia->execute(array($titulo, $fecha, $descripcion, $id));
   
    }

  }
