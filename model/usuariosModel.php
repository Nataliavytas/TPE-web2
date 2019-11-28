<?php
class usuariosModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }


    function getByEmail($emailUser){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute(array($emailUser));
        
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function getUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios");
        $sentencia->execute();
        $response = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }
  
    function editarUsuario($cuenta, $id){
        $sentencia = $this->db->prepare("UPDATE usuarios SET tipo_usuario=? WHERE id= ?");
        $sentencia->execute(array($cuenta, $id));
        //var_dump($sentencia->errorInfo()); die;
    }

    function borrarUsuario($id){
        $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id=?");
        $sentencia->execute(array($id));
    }
  
  
    function agregarUsuario($user,$password){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(email, password, tipo_usuario) VALUES (?,?,0)");
        $sentencia->execute(array($user, $password));
   
      }

  }
