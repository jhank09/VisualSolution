<?php

namespace Mini\Controller;

use Mini\Model\Venta;
use Mini\Model\Cliente;
use Mini\Model\Usuario;
use Mini\Model\Producto;
use Mini\Model\ProductoVenta;





class VentasController
{
  public function index()
  {
    $V = new Venta();
    $ven = $V->listar();

    require APP . 'view/_templates/header.php';
    require APP . 'view/ventas/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function agregar()
  {

    if (isset($_POST["btnguardar"])) {

      $Ven = new Venta();

      $Ven->agregar($_POST["valor_venta"], $_POST["id_cliente"], $_POST["id_usuario"]);
    }

    header('location: ' . URL . 'ventas/index');
  }

  public function agregarventa()
  {
    $p = new Producto();
    $producto = $p->listarProducto();
    $c = new Cliente();
    $cliente = $c->listar();
    $u = new Usuario();
    $usuario = $u->listarUsuario();
    require APP . 'view/_templates/header.php';
    require APP . 'view/ventas/agregar.php';
    require APP . 'view/_templates/footer.php';

  }


  public function eliminar($id_venta)
  {

    if (isset($id_venta)) {

      $Ven = new Venta();

      $Ven->eliminar($id_venta);
    }

    header('location: ' . URL . 'ventas/index');
  }


  public function editar($id_venta)
  {

    if (isset($id_venta)) {

      $V = new  Venta();
      $ven = $V->get_venta($id_venta);
      $c = new Cliente();
      $cliente = $c->listar();
      $u = new Usuario();
      $usuario = $u->listarUsuario();

      if ($ven === false) {
        $page = new \Mini\Controller\ErrorController();
        $page->index();
      } else {

        require APP . 'view/_templates/header.php';
        require APP . 'view/ventas/editar.php';
        require APP . 'view/_templates/footer.php';
      }
    } else {

      header('location: ' . URL . 'ventas/index');
    }
  }

  public function actualizarventa()
  {
    // if we have POST data to create a new song entry
    if (isset($_POST["btnguardaredit"])) {
      // Instance new Model (Song)
      $Ven = new Venta();
      // do updateSong() from model/model.php
      $Ven->actualizarven($_POST["valor_venta"], $_POST["id_cliente"], $_POST["id_usuario"], $_POST['id_venta']);
    }

    // where to go after song has been added
    header('location: ' . URL . 'ventas/index');
  }



}
