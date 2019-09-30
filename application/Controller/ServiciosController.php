<?php


namespace Mini\Controller;

use Mini\Model\Servicios;

class ServiciosController
{

    public function index()
    {
        $Ser = new Servicios();
        $ser = $Ser->listar();
        require APP . 'view/_templates/header.php';
        require APP . 'view/servicios/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function agregar()
    {
        if (isset($_POST["btnguardar"])) {
            $Ser = new Servicios();
            $Ser->agregar($_POST["valor_servicio"],$_POST["id_tipo_s"]);
        }
        header('location: ' . URL . 'servicios/index');
    }

    public function agregarservicios()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/servicios/agregar.php';
        require APP . 'view/_templates/footer.php';

    }

    public function eliminar($id_servicio)
    {
        if (isset($id_servicio)) {
            $Ser = new Servicios();
            $Ser->eliminar($id_servicio);
        }
        header('location: ' . URL . 'servicios/index');
    }

    public function editar($id_servicio)
    {
        if (isset($id_servicio)) {
            $Ser = new Servicios();
            $ser = $Ser->get_servicios($id_servicio);
            if ($ser === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                require APP . 'view/_templates/header.php';
                require APP . 'view/servicios/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'servicios/index');
        }
    }

    public function actualizarservicios()
    {
        if (isset($_POST["btnguardaredit"])) {
            $Ser = new Servicios();
            $Ser->actualizarservicios($_POST["id_tipo_servicio"], $_POST["valor_servicio"], $_POST['id_servicio']);
        }

        header('location: ' . URL . 'servicios/index');
    }

}