<?php

namespace Mini\Model;

use Mini\Core\Model;

class Venta extends Model
{

    public function listar()
    {
        $sql = "SELECT v.*, c.nombre_cliente as cliente, u.correo as usuario
        FROM ventas v
        INNER JOIN clientes c ON (v.id_cliente = c.id_cliente) 
        INNER JOIN usuarios u ON (v.id_usuario = u.id_usuario)";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


    public function agregar ($valor_venta, $id_cliente, $id_usuario)
    {
        $sql = "INSERT INTO ventas (valor_venta, id_cliente, id_usuario) VALUES (:valor_venta, :id_cliente, :id_usuario)";
        $query = $this->db->prepare($sql);
        $parameters = array(':valor_venta' => $valor_venta, ':id_cliente' => $id_cliente, ':id_usuario' => $id_usuario);
        $query->execute($parameters);
    }

    public function eliminar($id_venta)
    {
        $sql = "DELETE FROM ventas WHERE id_venta = :id_venta";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_venta' => $id_venta);
        $query->execute($parameters);
    }


    public function get_venta($id_venta)
    {
        $sql = "SELECT * FROM ventas WHERE id_venta = :id_venta";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_venta' => $id_venta);
        $query->execute($parameters);
        return ($query->rowcount() ? $query->fetch() : false);
    }


    public function actualizarven ($valor_venta, $id_cliente, $id_usuario, $id_venta)
    {
        $sql = "UPDATE ventas SET valor_venta = :valor_venta,id_cliente = :id_cliente,id_usuario = :id_usuario WHERE id_venta = :id_venta";
        $query = $this->db->prepare($sql);
        $parameters = array(':valor_venta' => $valor_venta, ':id_cliente' => $id_cliente, ':id_usuario' => $id_usuario, ':id_venta' => $id_venta);

        $query->execute($parameters);
    }

}
