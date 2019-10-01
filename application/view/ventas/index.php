<div class="container">
  <br>
  <h1 class="text-center">Ventas</h1>

  <a class="btn btn-primary" href="<?php echo URL . 'ventas/agregarventa'?>" role="button"><i class="mdi mdi-account-multiple-plus"></i>   Agregar</a>


<br>
<br>
  <table class="table table-hover">
      <thead >
      <tr>
          <td><b>Valor</b></td>
          <td><b>Fecha</b></td>
          <td><b>Cliente</b></td>
          <td><b>Correo</b></td>

      </tr>
      </thead>
      <tbody>
      <?php foreach ($ven as $venta):?>
          <tr>
              <td><?php if (isset($venta->valor_venta)) echo htmlspecialchars($venta->valor_venta, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($venta->fecha_venta)) echo htmlspecialchars($venta->fecha_venta, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($venta->id_cliente)) echo htmlspecialchars($venta->id_cliente, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($venta->id_usuario)) echo htmlspecialchars($venta->id_usuario, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><a class="btn btn-success" href="<?php echo URL . 'Ventas/editar/' . htmlspecialchars($venta->id_venta, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-lead-pencil"></i></a></td>
              <td><a class="btn btn-danger" href="<?php echo URL . 'Ventas/eliminar/' . htmlspecialchars($venta->id_venta, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-delete"></i></a></td>
          </tr>
        <?php endForeach ?>
      </tbody>
  </table>
</div>
