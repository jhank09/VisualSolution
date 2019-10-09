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
     public function detalle($id) {
        $sql = "SELECT * FROM usuarios  WHERE id_usuario = :id LIMIT 1";
        $consulta = $this->db->prepare($sql);
        $parametros = array(':id' => $id);
        $consulta->execute($parametros);
        return $consulta->rowcount() ? $consulta->fetch() : false;
    }

    public function cambiar_estado() {
        $sql = "UPDATE usuarios SET estado = ? WHERE id_usuario = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->estado);
        $stm->bindParam(2, $this->id_usuario);

        return $stm->execute();
    }

    private function ultimo() {
        $sql = "SELECT MAX(id_usuario) as id FROM usuarios";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetch();
    }

    public function agregarUsuario() {

        $sql = "INSERT INTO usuarios  VALUES(null,?,?,?,?)";
        $consulta = $this->db->prepare($sql);
        $consulta->bindParam(1, $this->correo);
        $consulta->bindParam(2, $this->contraseña);
        $consulta->bindParam(3, $this->rol);
        $consulta->bindParam(4, $this->estado);
        if ($consulta->execute()) {
            return $this->ultimo();
        } else {
            return false;
        }
    }

    public function eliminarUser($id) {

        $sql = "DELETE FROM usuarios WHERE id_usuario = :id";
        $consulta = $this->db->prepare($sql);
        $parametros = array(":id" => $id);
        $consulta->execute($parametros);
    }

    public function editarUsuario() {
        $sql = "UPDATE usuarios SET correo = ?,contraseña = ?,id_rol=?,estado =? WHERE id_usuario=?";
        $consulta = $this->db->prepare($sql);
        $consulta->bindParam(1, $this->correo);
        $consulta->bindParam(2, $this->contraseña);
        $consulta->bindParam(3, $this->rol);
        $consulta->bindParam(4, $this->estado);
        $consulta->bindParam(5, $this->id_usuario);
        return $consulta->execute();
    }


}
