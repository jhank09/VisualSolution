<?php

namespace Mini\Controller;

use Mini\Model\Usuario;
use Mini\Model\Rol;

class UsuarioController {

    public function index() {

        $usu = new Usuario();
        $usuarios = $usu->listarUsuario();
        require APP . 'view/_templates/header.php';
        require APP . 'view/usuariosV/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function listar() {
        $usuario = new Usuario();
        $registros = $usuario->listarUsuario();
        echo json_encode($registros);
    }

    public function cambiar($id, $estado) {
        $usuario = new Usuario();
        $usuario->__SET("id_usuario", $id);
        $usuario->__SET("estado", $estado);
        echo $usuario->cambiar_estado() ? "1" : "0";
    }

    public function crearUsuario() {

        $user = new Usuario();
        $roles = new Rol();
        $rol = $roles->listar();
        $usuarios = $user->listarUsuario();
        require APP . 'view/_templates/header.php';
        require APP . 'view/usuariosV/crear.php';
        require APP . 'view/_templates/footer.php';
    }

    public function guardarUsuario() {
        $user = new Usuario();
        $user->__SET("correo", $_POST["correo"]);
        $user->__SET("contraseña", password_hash($_POST["contraseña"], PASSWORD_DEFAULT));
        $user->__SET("rol", $_POST["rol"]);
        $user->__SET("estado", $_POST["estado"]);

        if ($user->agregarUsuario()) {

            $_SESSION["mensage"] = "se guardo";
        } else {
            $_SESSION["mensage"] = "No se guardo";
        }
        header("location:" . URL . "Usuario/index");
    }

    public function eliminarUsuario($id) {
        if (isset($id)) {
            $user = new Usuario();
            $user->eliminarUser($id);
        }

        header("location:" . URL . "Usuario/index");
    }

    public function Modificar($id) {
        if (isset($id)) {
            $user = new Usuario();
            $usuario = $user->detalle($id);
            $rol = new Rol();
            $roles = $rol->listar();

            if ($usuario === false) {
                $error = new ErrorController();
                $error->index();
            } else {
                require APP . 'view/_templates/header.php';
                require APP . 'view/usuariosV/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'Usuario/index');
        }
    }

    public function actualizar() {

        $usuario = new Usuario();
        $usuario->__SET("correo", $_POST['correo']);
        $usuario->__SET("contraseña", password_hash($_POST['contraseña'], PASSWORD_DEFAULT));
        $usuario->__SET("rol", $_POST['rol']);
        $usuario->__SET("estado", $_POST['estado']);
        $usuario->__SET("id_usuario", $_POST['id_user']);
        $usuario->editarUsuario();
        try {
            if ($usuario->editarUsuario()) {
                $_SESSION['mensaje'] = "se actualizo el usuario";
            } else {
                $_SESSION['mensaje'] = " No se actualizo el usuario";
            }
        } catch (\Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        header("location:" . URL . "Usuario/index");
    }

}
