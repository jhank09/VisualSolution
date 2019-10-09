<?php

namespace Mini\Controller;

use Mini\Model\Proveedor;

class ProveedoresController
{
    public function index()
    {

        $Pro = new Proveedor();

        $pro = $Pro->listar();

        require APP . 'view/_templates/header.php';
        require APP . 'view/proveedores/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function agregar()
    {

        if (isset($_POST["btnguardar"])) {

            $Pro = new Proveedor();

            $Pro->agregar($_POST["nombre_proveedor"], $_POST["telefono"]);
        }

                  header('location: ' . URL . 'proveedores/index');
    }

        public function agregarproveedor()
        {

                            require APP . 'view/_templates/header.php';
                            require APP . 'view/proveedores/agregar.php';
                            require APP . 'view/_templates/footer.php';

        }


    public function eliminar($id_proveedor)
    {

        if (isset($id_proveedor)) {

            $Pro = new Proveedor();

            $Pro->eliminar($id_proveedor);
        }

        header('location: ' . URL . 'proveedores/index');
    }


    public function editar($id_proveedor)
    {

        if (isset($id_proveedor)) {

            $P = new Proveedor();

            $pro = $P->get_proveedor($id_proveedor);
            if ($pro === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {

                require APP . 'view/_templates/header.php';
                require APP . 'view/proveedores/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {

            header('location: ' . URL . 'proveedores/index');
        }
    }


    public function actualizarproveedor()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["btnguardaredit"])) {
            // Instance new Model (Song)
            $Pro = new Proveedor();
            // do updateSong() from model/model.php
            $Pro->actualizarpro($_POST["nombre_proveedor"], $_POST["telefono"], $_POST['id_proveedor']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'proveedores/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        // Instance new Model (Song)
        $Song = new Song();
        $amount_of_songs = $Song->getAmountOfSongs();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_songs;
    }

}
