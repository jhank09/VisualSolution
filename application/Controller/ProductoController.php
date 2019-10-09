<?php

namespace Mini\Controller;
use Mini\Model\Producto;
use Mini\Model\Categoria;



class ProductoController {

 
      public function index() {

        $p = new Producto();
        $productos = $p->listarProducto();
        $c = new Categoria();
        $categorias = $c->listarCategoria();

        require APP . 'view/_templates/header.php';
        require APP . 'view/productos/index.php';
        require APP . 'view/_templates/footer.php';
    }  
  
    

    public function guardar() {
        if (isset($_POST["btnGuardar"])) {

            $p = new Producto();
            $nom_img = $_FILES['imagen']['name'];
            $tipo_img = $_FILES['imagen']['type'];
            $tam_img = $_FILES['imagen']['size'];

            if ($tam_img <= 10000) {//valido la que el peso del archivo sea menor a 10000 bytes, si lo es, lo subo al servidor
                if ($tipo_img == "image/jpeg" || $tipo_img == "image/jpg" || $tipo_img == "image/png") {

                    //ruta de la carpeta destino n el servidor
                    $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/VisualSolution_F/public/img/";

                    //movemos la imagen del direcctorio temporal al directorio escogido
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino . $nom_img);

                    $p->guardarProducto($_POST['nombre_producto'], $_POST['valor'], $_POST['marca'], $_POST['categoria'], $_POST['cantidad'], $nom_img);
                } else {
                    header('location: ' . URL . 'Producto/index');
                }
            } else {
                header('location: ' . URL . 'Producto/index');
            }
        }
        header('location: ' . URL . 'Producto/index');
    }

    public function eliminar($id) {
        if (isset($id)) {
            $p = new Producto();
            $producto = $p->BorrarProducto($id);
        }
        header('location: ' . URL . 'Producto/index');
    }

    public function editar($id) {
        if (isset($id)) {//si me llego algun id...
            $p = new Producto(); //instancio el modelo Producto
            $productos = $p->detalle($id); //ejecuto el metodo de buscar por id del producto
            $c = new Categoria();
            $categorias = $c->listarCategoria();
            //si me retorna false
            if ($productos === false) {//si no tengo ninun id...
                $paginaError = new ErrorController(); //instancio el controlador Error
                $paginaError->index(); // Y ejecuto el metodo index de ErrorController
            } else {//si obtuve el id...
                require APP . 'view/_templates/header.php'; //traigo las vistas para editar
                require APP . 'view/productos/editar.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {//si no recibi el parametro id redirecciono al index
            header('location: ' . URL . 'Producto/index');
        }
    }

    public function actualizar() {

        if (isset($_POST['btnActualizar'])) {
            $p = new Producto();
            $nom_img = $_FILES['imagen']['name'];
            $tipo_img = $_FILES['imagen']['type'];
            $tam_img = $_FILES['imagen']['size'];

            if ($tam_img <= 10000) {//valido la que el peso del archivo sea menor a 10000 bytes, si lo es, lo subo al servidor
                if ($tipo_img == "image/jpeg" || $tipo_img == "image/jpg" || $tipo_img == "image/png") {

                    //ruta de la carpeta destino n el servidor
                    $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/VisualSolution_F/public/img/";

                    //movemos la imagen del direcctorio temporal al directorio escogido
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino . $nom_img);

                    $p->editarProducto($_POST['nombre_producto'], $_POST['valor'], $_POST['marca'], $_POST['categoria'], $_POST['cantidad'], $_POST['id_producto'],$nom_img);
                
                    
                } else {
                    header('location: ' . URL . 'Producto/index');
                }
            } else {
                header('location: ' . URL . 'Producto/index');
            }
        }
        header('location: ' . URL . 'Producto/index');        
    }

}
