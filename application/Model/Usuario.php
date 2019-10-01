<?php

namespace Mini\Model;

use Mini\Core\Model;

class Usuario extends Model {

    public function listarUsuario(){
        $sql = "SELECT * FROM usuarios";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

}
