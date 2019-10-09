<?php

namespace Mini\Model;

use Mini\Core\Model;

class Cliente extends Model
{

    public function listar()
    {
        $sql = "SELECT * FROM clientes";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function agregar($documento, $nombre_cliente, $telefono)
    {
        $sql = "INSERT INTO clientes (documento, nombre_cliente, telefono) VALUES (:documento, :nombre_cliente, :telefono)";
        $query = $this->db->prepare($sql);
        $parameters = array(':documento' => $documento, ':nombre_cliente' => $nombre_cliente, ':telefono' => $telefono);

        $query->execute($parameters);
    }

    public function eliminar($id_cliente)
    {
        $sql = "DELETE FROM clientes WHERE id_cliente = :id_cliente";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_cliente' => $id_cliente);

        $query->execute($parameters);
    }

    public function get_cliente($id_cliente)
    {
        $sql = "SELECT * FROM clientes WHERE id_cliente = :id_cliente";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_cliente' => $id_cliente);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }

    public function actualizarcliente($documento, $nombre_cliente, $telefono, $id_cliente)
    {
        $sql = "UPDATE clientes SET documento = :documento, nombre_cliente = :nombre_cliente, telefono = :telefono WHERE id_cliente = :id_cliente";
        $query = $this->db->prepare($sql);
        $parameters = array(':documento' => $documento, ':nombre_cliente' => $nombre_cliente, ':telefono' => $telefono, ':id_cliente' => $id_cliente);

        $query->execute($parameters);
    }

}
