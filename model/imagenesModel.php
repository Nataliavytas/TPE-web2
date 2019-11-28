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
    private function subirImagenes($imagenes){
       $rutas = [];
       foreach ($imagenes as $imagen) {
           $destino_final = 'images/revistas/' . uniqid() . '.jpg';
           move_uploaded_file($imagen, $destino_final);
           $rutas[] = $destino_final;
       }
       return $rutas;
     }
     function agregarImagen($imagenes, $id){
       $rutas = $this->subirImagenes($imagenes);
       $sentencia_imagenes = $this->db->prepare('INSERT INTO imagenes(id_revistas,imagen) VALUES(?,?)');
       foreach ($rutas as $ruta) {
            $sentencia_imagenes->execute([$id, $ruta]);
      var_dump($sentencia_imagenes->errorInfo());die;
    }
     }
    function borrarIMG($id){
      $sentencia = $this->db->prepare("DELETE FROM imagenes WHERE id_revistas = ?");
      $sentencia->execute(array($id));
      //var_dump($sentencia->errorInfo()); die;
    }
}