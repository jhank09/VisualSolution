<div class="container">
  <br>
  <h1 class="text-center">Servicios</h1>

  <a class= "btn btn-primary" name="agregar" href="<?php echo URL . 'servicios/agregarservicios'?>" role="button">Agregar Servicios</a>
  <br>
  <br>
  <table class="table table-hover ta">
    <thead >
      <tr>
        <td type="hidden"><b>Id Servicio</b></td>
          <td><b>Tipo de servicio</b></td>
            <td><b>Valor del servicio</b></td>
              <td><b>Feccha</b></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ser as $servicios) { ?>
                <tr>
                  <td type="hidden" ><?php if (isset($servicios->id_servicio)) echo htmlspecialchars($servicios->id_servicio, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($servicios->id_tipo_servicio)) echo htmlspecialchars($servicios->id_tipo_servicio, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($servicios->valor_servicio)) echo htmlspecialchars($servicios->valor_servicio, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($servicios->fecha)) echo htmlspecialchars($servicios->fecha, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><a class= "btn btn-success" href="<?php echo URL . 'servicios/editar/' . htmlspecialchars($servicios->id_servicio, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-lead-pencil mdi-18px"></i></a></td>
                    <td><a class= "btn btn-danger" href="<?php echo URL . 'servicios/eliminar/' . htmlspecialchars($servicios->id_servicio, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-delete mdi-18px"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>