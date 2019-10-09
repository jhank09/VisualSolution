
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
        <div class="col-md-4">
          <div class="form-group">
            <label>Producto</label>
            <select class="form-control" name="id_producto" id="id_producto" required>
              <option>Seleccione</option>
              <?php foreach ($producto as $p): ?>
                <option value="<?= $p->id_producto ?>"><?= $p->nombre_producto ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>cantidad</label>
            <input class="form-control" id="cantidad" type="number" name="cantidad" value="" required min="1"/>
          </div>
            <button class="btn btn-primary float-right" type="button" onclick="agregar_producto()">Agregar producto</button>
          </div>
          <div class="col-md-8">
            <table class="table" id="tb_productos">
              <thead>
                <tr>
                  <th>producto</th>
                  <th>cantidad</th>
                  <th>opción</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>



          </div>

        <br>
        <input class="btn btn-success" onclick="validartp();" type="submit" name="btnguardar" value="Guardar" />
      </form>
      </div>
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
