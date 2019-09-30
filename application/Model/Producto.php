<?php

namespace Mini\Model;

use Mini\Core\Model;

class Producto extends Model {

    
    public function listarProducto(){
        $sql = "SELECT * FROM productos";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function detalle($id) {
        $sql = "SELECT * FROM productos WHERE id_producto = :id LIMIT 1";
        $consulta = $this->db->prepare($sql);
        $parametros = array(':id' => $id);
        $consulta->execute($parametros);
        return ($consulta->rowcount() ? $consulta->fetch() : false);
    }
    
    public function guardarProducto($nombre,$valor,$marca,$categoria,$cantidad,$imagen){
        
       $sql = "INSERT INTO productos VALUES(null,:nom,:val,:mar,:cate,:cant,:img)";
       $stm = $this->db->prepare($sql);
       $parametros = array(':nom'=>$nombre,':val'=>$valor,':mar'=>$marca,
           ':cate'=>$categoria,':cant'=>$cantidad,':img'=>$imagen);
       $stm->execute($parametros);
    }
    public function BorrarProducto($id) {

        $sql = "DELETE FROM productos WHERE id_producto = :id_pro";
        $consulta = $this->db->prepare($sql);
        $resultado = array(':id_pro' => $id);
        $consulta->execute($resultado);
    }
    public function editarProducto($nombre,$valor,$marca,$categoria,$cantidad,$id_producto){
        
       $sql = "UPDATE productos SET nombre_producto= :nom,valor_producto = :val,marca = :mar,
               id_categoria_producto = :cate,cantidad= :cant
               WHERE id_producto = :id_pro";
       $stm = $this->db->prepare($sql);
       $parametros = array(':nom'=>$nombre,':val'=>$valor,':mar'=>$marca,':cate'=>$categoria,':cant'=>$cantidad,':id_pro'=>$id_producto);
       $stm->execute($parametros);
    }
    
    
    

}
