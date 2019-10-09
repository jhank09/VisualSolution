<?php

namespace Mini\Model;
use Mini\Core\Model;

class Rol extends Model{
    
    public function listar(){
        
        $sql = "SELECT * FROM roles";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    
}