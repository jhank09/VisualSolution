<?php

namespace Mini\Controller;

use Mini\Model\Compras;

class ComprasController
{

    public function index()
    {
        $Com = new Compras();
        $com = $Com->listar();
        require APP . 'view/_templates/header.php';
        require APP . 'view/compras/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function agregar()
    {
        if (isset($_POST["btnguardar"])) {
            $Com = new Compras();
            $Com->agregar($_POST["valor_compra"]);
        }
        header('location: ' . URL . 'compras/index');
    }

    public function agregarservicios()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/compras/agregar.php';
        require APP . 'view/_templates/footer.php';

    }

    public function eliminar($id_compra)
    {
        if (isset($id_compra)) {
            $Com = new Compras();
            $Com->eliminar($id_compra);
        }
        header('location: ' . URL . 'compras/index');
    }

    public function editar($id_compra)
    {
        if (isset($id_compra)) {
            $Com = new Compras();
            $com = $Com->get_servicios($id_compra);
            if ($com === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                require APP . 'view/_templates/header.php';
                require APP . 'view/compras/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'compras/index');
        }
    }

    public function actualizarcompras()
    {
        if (isset($_POST["btnguardaredit"])) {
            $Com = new Compras();
            $Com->actualizarservicios($_POST["valor_compra"]);
        }

        header('location: ' . URL . 'compras/index');
    }

}