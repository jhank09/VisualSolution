<?php

namespace Mini\Model;

use Mini\Core\Model;

class PlanSepareProducto extends Model
{

  public function listar ($pv_id_venta){
    $sql= "SELECT v.*, p.nombre_producto, p.valor_producto
    FROM productos_ventas pv
    INNER JOIN productos p ON (p.id_producto = pv.id_producto_venta)
    INNER JOIN ventas v ON (v.id_venta = pv.id_venta)
    WHERE pv.id_venta = :pv_id_venta";
    $query = $this->db->prepare($sql);
    $parameters = array(':pv_id_venta' => $pv_id_venta);
    $query->execute($parameters);
    return $query->fetchAll();
  }

  public function guardar(){
    $sql="INSERT INTO productos_ventas (id_producto, id_venta, cantidad, total_venta_producto) VALUES (:id_producto, :id_venta, :cantidad, :total_venta_producto)";
    $query = $this->db->prepare($sql);
    $parameters = array(':id_producto' => $id_producto, ':id_venta' => $id_venta, ':cantidad' => $cantidad, ':total_venta_producto' => $total_venta_producto);
    return $query->execute($parameters);
  }

  public function eliminar($pv_id_venta){
    $sql="DELETE FROM productos_ventas WHERE id_producto_venta = :id_producto_venta";
    $query = $this->db->prepare($sql);
    $parameters = array(':id_producto_venta' => $pv_id_venta);
    return $query->execute($parameters);
  }

}

?>
