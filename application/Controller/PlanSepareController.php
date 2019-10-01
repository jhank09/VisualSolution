<?php


namespace Mini\Controller;

use Mini\Model\PlanSepare;
use Mini\Model\Cliente;

class PlanSepareController
{

    public function index()
    {
        $Cli = new Cliente();
        $cli=$Cli->listar();
        $Pla = new PlanSepare();
        $pla = $Pla->listar();
        require APP . 'view/_templates/header.php';
        require APP . 'view/plansepare/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function agregar()
    {
        if (isset($_POST["btnguardar"])) {
            $Pla = new PlanSepare();
            $Pla->agregar($_POST["abono"],  $_POST["id_cliente"]);
        }
        header('location: ' . URL . 'plansepare/index');
    }

    public function agregarplansepare()
    {

        $Cli = new Cliente();
        $cli=$Cli->listar();
        $Pla = new PlanSepare();
        $pla = $Pla->listar();

        require APP . 'view/_templates/header.php';
        require APP . 'view/plansepare/agregar.php';
        require APP . 'view/_templates/footer.php';

    }

    public function eliminar($id_plan_separe)
    {
        if (isset($id_plan_separe)) {
            $Pla = new PlanSepare();
            $Pla->eliminar($id_plan_separe);
        }
        header('location: ' . URL . 'plansepare/index');
    }

    public function editar($id_plan_separe)
    {
        if (isset($id_plan_separe)) {
            $Pla = new PlanSepare();
            $pla = $Pla->get_plansepare($id_plan_separe);
            if ($pla === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                require APP . 'view/_templates/header.php';
                require APP . 'view/plansepare/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'plansepare/index');
        }
    }

    public function actualizarplansepare()
    {
        if (isset($_POST["btnguardaredit"])) {
            $Pla = new PlanSepare();
            $Pla->actualizarplansepare($_POST["abono"],  $_POST["id_cliente"], $_POST['id_plan_separe']);
        }

        header('location: ' . URL . 'plansepare/index');
    }

}