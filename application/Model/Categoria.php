<?php

namespace Mini\Model;

use Mini\Core\Model;

class Categoria extends Model {

    public function listarCategoria(){
        $sql = "SELECT * FROM categoria_productos";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

}
