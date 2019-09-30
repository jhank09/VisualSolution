<div class="container">
  <br>
  <h1 class="text-center">Compras</h1>

  <a class="btn btn-primary" href="<?php echo URL . 'compras/agregarcompra'?>" role="button"><i class="mdi mdi-account-multiple-plus"></i>   Agregar</a>
<br>
<br>
  <table class="table table-hover">
      <thead >
      <tr>
          <td><b>Valor de la compra</b></td>
          <td><b>Fecha de la compra</b></td>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($com as $compra):?>
          <tr>
              <td><?php if (isset($compra->valor_compra)) echo htmlspecialchars($compra->valor_compra, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($compra->fecha_compra)) echo htmlspecialchars($compra->fecha_compra, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><a class="btn btn-success" href="<?php echo URL . 'compras/editar/' . htmlspecialchars($compra->id_proveedor, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-lead-pencil"></i></a></td>
              <td><a class="btn btn-danger" href="<?php echo URL . 'compras/eliminar/' . htmlspecialchars($compra->id_proveedor, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-delete"></i></a></td>
          </tr>
        <?php endForeach ?>
      </tbody>
  </table>
</div>