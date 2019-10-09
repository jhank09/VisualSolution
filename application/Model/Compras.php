<?php

namespace Mini\Model;

use Mini\Core\Model;

class Compras extends Model
{


    public function listar()
    {
        $sql = "SELECT * FROM compras";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function agregar($valor_compra)
    {
        $sql = "INSERT INTO compras (valor_compra) VALUES (:valor_compra)";
        $query = $this->db->prepare($sql);
        $parameters = array(':valor_compra' => $valor_compra);

        $query->execute($parameters);
    }

    public function eliminar($id_compra)
    {
        $sql = "DELETE FROM compras WHERE id_compra = :id_compra";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_compra' => $id_compra);

        $query->execute($parameters);
    }

    public function get_compras($id_compra)
    {
        $sql = "SELECT * FROM compras WHERE id_compra = :id_compra";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_compra' => $id_compra);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }

    public function actualizarcompra($valor_compra, $id_compra)
    {
        $sql = "UPDATE compras SET valor_compra = :valor_compra WHERE id_compra = :id_compra";
        $query = $this->db->prepare($sql);
        $parameters = array(':valor_compra' => $valor_compra, ':id_compra' => $id_compra);

        $query->execute($parameters);
    }

}
