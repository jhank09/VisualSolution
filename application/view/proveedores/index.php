<div class="container">
  <br>
  <h1 class="text-center">Proveedores</h1>

  <a class="btn btn-primary" href="<?php echo URL . 'proveedores/agregarproveedor'?>" role="button"><i class="mdi mdi-account-multiple-plus"></i>   Agregar</a>
<br>
<br>
  <table class="table table-hover">
      <thead >
      <tr>
          <td><b>Nombre</b></td>
          <td><b>Teléfono</b></td>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($pro as $proveedor):?>
          <tr>
              <td><?php if (isset($proveedor->nombre_proveedor)) echo htmlspecialchars($proveedor->nombre_proveedor, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($proveedor->telefono)) echo htmlspecialchars($proveedor->telefono, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><a class="btn btn-success" href="<?php echo URL . 'Proveedores/editar/' . htmlspecialchars($proveedor->id_proveedor, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-lead-pencil"></i></a></td>
              <td><a class="btn btn-danger" href="<?php echo URL . 'Proveedores/eliminar/' . htmlspecialchars($proveedor->id_proveedor, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-delete"></i></a></td>
          </tr>
        <?php endForeach ?>
      </tbody>
  </table>
</div>
