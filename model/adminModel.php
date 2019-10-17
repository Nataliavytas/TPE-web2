<?php 
class adminModel {

    private $db; 

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_minimalismo;charset=utf8' , 'root' , '');
    }

 
    function getByEmail($emailUser){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute([$emailUser]);

        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }


}
