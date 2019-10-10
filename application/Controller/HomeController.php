<?php

namespace Mini\Controller;

class HomeController {

    public function index() {
        // load views

        require APP . 'view/home/inicial.php';
    }

    public function vistaAdmin() {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/home_admin.php';
        require APP . 'view/_templates/footer.php';
    }

    public function vistaEncargado() {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/home_encargado.php';
        require APP . 'view/_templates/footer.php';
    }

    public function vistaEmpleado() {

        require APP . 'view/_templates/header.php';
        require APP . 'view/home/home_empleado.php';
        require APP . 'view/_templates/footer.php';
    }

}
