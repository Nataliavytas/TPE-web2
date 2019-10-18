<?php
class adminModel {

    private $db;

    function _construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }


    function getByEmail($emailUser){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute(array($emailUser));

        $password = $sentencia->fetch(PDO::FETCH_OBJS);
        return $password;
    }



}
