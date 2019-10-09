<?php

namespace Mini\Model;

use Mini\Core\Model;

class LoginModel extends Model{
    
    private $correo;
    
    public function __set($attr, $val) {
        $this->$attr = $val ;
    }
    
    public function __GET($attr) {
        return $this->$attr;
    }
    
    public function obtenerCorreo(){
        
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->correo);
        $stm->execute();
        return $stm->fetch();
    }

    
}