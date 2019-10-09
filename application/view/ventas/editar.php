<div class="container">
  <br>
  <h1 class="text-center">Editar Venta</h1>
  <div class="box">
    <form action="<?php echo URL; ?>Ventas/actualizarventa" method="POST">
      <label>Valor</label>
      <input  class="form-control"autofocus type="number" name="valor_venta" value="<?php echo htmlspecialchars($ven->valor_venta, ENT_QUOTES, 'UTF-8'); ?>" required />
      <br>
      <label>Cliente</label>
      <select class="form-control" name="id_cliente" required>
      <option value=""></option>
        <?php foreach ($cliente as $c): ?>
          <option value="<?= $c->id_cliente ?>"><?= $c->nombre_cliente ?></option>
        <?php endforeach;?>
      </select>
      <label>Usuario</label>
      <select class="form-control" name="id_usuario" required>
        <option></option>
        <?php foreach ($usuario as $u): ?>
          <option value="<?= $u->id_usuario ?>"><?= $u->correo ?></option>
        <?php endforeach;?>
      </select>
      <br>
      <input type="hidden" name="id_venta" value="<?php echo htmlspecialchars($ven->id_venta, ENT_QUOTES, 'UTF-8'); ?>" />
      <input class="btn btn-success" type="submit" name="btnguardaredit" value="Actualizar" />
    </form>
  </div>
</div>
