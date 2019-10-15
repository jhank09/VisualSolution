<?php

namespace Mini\Controller;

use Mini\Model\LoginModel;

class LoginController {

    public function index() {

        require APP . "Home/index";
    }

    public function logueo() {
        if (isset($_POST['ingresar'])) {
            $correo = new LoginModel();
            $correo->__SET("correo", $_POST['correo']);
            $contraseña = $_POST['contraseña'];
            $resultado = $correo->obtenerCorreo();
            
            if ($resultado != false) {

                if (password_verify($contraseña, $resultado->contraseña)) {
                   
                    if ($resultado->id_rol == 1) {
                        session_start();
                        $_SESSION["id_usuario"] = $resultado->id_usuario;
                        $_SESSION["correo"] = $resultado->correo;
                        $_SESSION["rol"] = $resultado->id_rol;
                        header("location: " . URL . "Home/vistaAdmin");
                    } else if ($resultado->id_rol == 2) {
                        session_start();
                        $_SESSION["id_usuario"] = $resultado->id_usuario;
                        $_SESSION["correo"] = $resultado->correo;
                        $_SESSION["rol"] = $resultado->id_rol;
                        header("location: " . URL . "Home/vistaEncargado");
                    } else if ($resultado->id_rol == 3) {
                        session_start();
                        $_SESSION["id_usuario"] = $resultado->id_usuario;
                        $_SESSION["correo"] = $resultado->correo;
                        $_SESSION["rol"] = $resultado->id_rol;
                        header("location: " . URL . "Home/vistaEmpleado");
                    } else {
                         echo"<script> alert('usuario o contraseña equivocada!!')</script>";
                        header("location: " . URL . "Home");
                       
                    }
                } else {
                     echo"<script> alert('usuario o contraseña equivocada!!')</script>";
                    header("location: " . URL . "Home");
                   
                }
            } else {
                  echo"<script> alert('usuario o contraseña equivocada!!')</script>";
                header("location: " . URL . "Home");
              
            }
        }
    }

    public function cerrarSession() {

        session_start();
        session_destroy();
        unset($_SESSION["id_usuario"]);
        unset($_SESSION["correo"]);
        unset($_SESSION["rol"]);

        header('location: ' . URL . 'Home');
    }

}
