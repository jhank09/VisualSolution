<?php

namespace Mini\Model;

use Mini\Core\Model;

class Proveedor extends Model
{

    public function listar()
    {
        $sql = "SELECT * FROM proveedores";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


    public function agregar ($nombre_proveedor, $telefono)
    {
        $sql = "INSERT INTO proveedores (nombre_proveedor, telefono) VALUES (:nombre_proveedor, :telefono)";
        $query = $this->db->prepare($sql);
        $parameters = array(':nombre_proveedor' => $nombre_proveedor, ':telefono' => $telefono);
        $query->execute($parameters);
    }


    public function eliminar($id_proveedor)
    {
        $sql = "DELETE FROM proveedores WHERE id_proveedor = :id_proveedor";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_proveedor' => $id_proveedor);
        $query->execute($parameters);
    }


    public function get_proveedor($id_proveedor)
    {
        $sql = "SELECT * FROM proveedores WHERE id_proveedor = :id_proveedor";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_proveedor' => $id_proveedor);
        $query->execute($parameters);
        return ($query->rowcount() ? $query->fetch() : false);
    }


    public function actualizarpro ($nombre_proveedor, $telefono, $id_proveedor)
    {
        $sql = "UPDATE proveedores SET nombre_proveedor = :nombre_proveedor, telefono = :telefono WHERE id_proveedor = :id_proveedor";
        $query = $this->db->prepare($sql);
        $parameters = array(':nombre_proveedor' => $nombre_proveedor, ':telefono' => $telefono, ':id_proveedor' => $id_proveedor);

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }
}
