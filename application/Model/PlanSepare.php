<?php

namespace Mini\Model;

use Mini\Core\Model;

class PlanSepare extends Model
{

    public function listar()
    {
        $sql = "SELECT * FROM plan_separe";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function agregar($abono, $id_cliente)
    {
        $sql = "INSERT INTO plan_separe (abono, id_cliente) VALUES (:abono, :id_cliente)";
        $query = $this->db->prepare($sql);
        $parameters = array(':abono' => $abono, ':id_cliente' => $id_cliente);

        $query->execute($parameters);
    }

    public function eliminar($id_plan_separe)
    {
        $sql = "DELETE FROM plan_separe WHERE id_plan_separe = :id_plan_separe";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_plan_separe' => $id_plan_separe);

        $query->execute($parameters);
    }

    public function get_plansepare($id_plan_separe)
    {
        $sql = "SELECT * FROM plan_separe WHERE id_plan_separe = :id_plan_separe";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_plan_separe' => $id_plan_separe);

        $query->execute($parameters);

        return ($query->rowcount() ? $query->fetch() : false);
    }

    public function actualizarplansepare($abono, $id_cliente, $id_plan_separe)
    {
        $sql = "UPDATE plan_separe SET abono = :abono, id_cliente = :id_cliente WHERE id_plan_separe = :id_plan_separe";
        $query = $this->db->prepare($sql);
        $parameters = array(':abono' => $abono, ':id_cliente' => $id_cliente, ':id_plan_separe' => $id_plan_separe);

        $query->execute($parameters);
    }

}