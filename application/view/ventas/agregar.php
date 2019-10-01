
<div class="container">
  <br>
  <h1 class="text-center ">Agregar Venta</h1>
  <div class="box">
    <form action="<?php echo URL; ?>Ventas/agregar" method="POST">
      <label>Valor</label>
      <input class="form-control" id="valor" type="number" name="valor_venta" value="" required onChange="validarSiNumero(this.value);"/>
      <br>
      <label>Cliente</label>
      <select class="form-control" name="id_cliente" required>
        <option></option>
        <?php foreach ($cliente as $c): ?>
          <option value="<?= $c->id_cliente ?>"><?= $c->nombre_cliente ?></option>
        <?php endforeach; ?>
      </select>
      <label>Usuario</label>
      <select class="form-control" name="id_usuario" required>
        <option></option>
        <?php foreach ($usuario as $u): ?>
          <option value="<?= $u->id_usuario ?>"><?= $u->correo ?></option>
        <?php endforeach; ?>
      </select>
      <br>
      <input class="btn btn-success" onclick="validartp();" type="submit" name="btnguardar" value="Guardar" />
    </form>
  </div>

  <script>
  function validarSiNumero(valor){

    if (!/^([0-9])*$/.test(valor)){
      Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Solo numeros positivos',
      })
      return false;
    }
  }
</script>
