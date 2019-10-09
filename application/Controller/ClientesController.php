<?php


namespace Mini\Controller;

use Mini\Model\Cliente;

class ClientesController
{

    public function index()
    {
        $Cli = new Cliente();
        $cli = $Cli->listar();
        require APP . 'view/_templates/header.php';
        require APP . 'view/clientes/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function agregar()
    {
        if (isset($_POST["btnguardar"])) {
            $Cli = new Cliente();
            $Cli->agregar($_POST["documento"], $_POST["nombre_cliente"],  $_POST["telefono"]);
        }
        header('location: ' . URL . 'clientes/index');
    }

    public function agregarcliente()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/clientes/agregar.php';
        require APP . 'view/_templates/footer.php';

    }

    public function eliminar($id_cliente)
    {
        if (isset($id_cliente)) {
            $Cli = new Cliente();
            $Cli->eliminar($id_cliente);
        }
        header('location: ' . URL . 'clientes/index');
    }

    public function editar($id_cliente)
    {
        if (isset($id_cliente)) {
            $Cli = new Cliente();
            $cli = $Cli->get_cliente($id_cliente);
            if ($cli === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                require APP . 'view/_templates/header.php';
                require APP . 'view/clientes/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'clientes/index');
        }
    }

    public function actualizarcliente()
    {
        if (isset($_POST["btnguardaredit"])) {
            $Cli = new Cliente();
            $Cli->actualizarcliente($_POST["documento"], $_POST["nombre_cliente"],  $_POST["telefono"], $_POST['id_cliente']);
        }

        header('location: ' . URL . 'clientes/index');
    }

}