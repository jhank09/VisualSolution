<?php

namespace Mini\Model;

use Mini\Core\Model;

class Servicios extends Model
{


    public function listar()
    {
        $sql = "SELECT * FROM servicios";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function agregar($valor_servicio, $id_tipo_servicio)
    {
        $sql = "INSERT INTO servicios (valor_servicio, id_tipo_servicio) VALUES (:valor_servicio, :id_tipo_servicio)";
        $query = $this->db->prepare($sql);
        $parameters = array(':valor_servicio' => $valor_servicio, ':id_tipo_servicio' => $id_tipo_servicio);

        $query->execute($parameters);
    }

    public function eliminar($id_servicio)
    {
        $sql = "DELETE FROM servicios WHERE id_servicio = :id_servicio";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_servicio' => $id_servicio);

        $query->execute($parameters);
    }

    public function get_servicios($id_servicio)
    {
        $sql = "SELECT * FROM servicios WHERE id_servicio = :id_servicio";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_servicio' => $id_servicio);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }

    public function actualizarservicios($id_tipo_servicio, $valor_servicio, $id_servicio)
    {
        $sql = "UPDATE servicios SET id_tipo_servicio = :id_tipo_servicio, valor_servicio = :valor_servicio WHERE id_servicio = :id_servicio";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_tipo_servicio' => $id_tipo_servicio, ':valor_servicio' => $valor_servicio, ':id_servicio' => $id_servicio);

        $query->execute($parameters);
    }

}
