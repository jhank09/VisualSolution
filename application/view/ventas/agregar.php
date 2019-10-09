
<div class="container">
  <br>
  <h1 class="text-center ">Agregar Venta</h1>
  <div class="box">
    <form action="<?php echo URL; ?>Ventas/agregar" method="POST">
      <div class="row">
        <div class="col">
          <label>Valor</label>
          <input class="form-control" id="valor" type="number" name="valor_venta" value="" required onChange="validarSiNumero(this.value);"/>
          <br>
        </div>
        <div class="col">
          <label>Cliente</label>
          <select class="form-control" name="id_cliente" required>
            <option></option>
            <?php foreach ($cliente as $c): ?>
              <option value="<?= $c->id_cliente ?>"><?= $c->nombre_cliente ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col">
          <label>Usuario</label>
          <select class="form-control" name="id_usuario" required>
            <option></option>
            <?php foreach ($usuario as $u): ?>
              <option value="<?= $u->id_usuario ?>"><?= $u->correo ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label>Producto</label>
          <select class="form-control" name="id_producto" required>
            <option>Seleccione</option>
            <?php foreach ($producto as $p): ?>
              <option value="<?= $p->id_producto ?>"><?= $p->nombre_producto ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
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
