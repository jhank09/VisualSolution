<div class="container">
  <br>
  <h1 class="text-center">Plan Separe</h1>

  <a class= "btn btn-primary" name="agregar" href="<?php echo URL . 'plansepare/agregarplansepare'?>" role="button"><i class="mdi mdi-account-multiple-plus"></i>   Agregar Plan Separe</a>
  <br>
  <br>
  <table class="table table-hover ta">
    <thead >
      <tr>
          <td><b>Abono</b></td>
            <td><b>Fecha</b></td>
              <td><b>Documento</b></td>
              <td><b>Cliente</b></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($pla as $plansepare) { ?>
                <tr>
                  <td><?php if (isset($plansepare->abono)) echo htmlspecialchars($plansepare->abono, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($plansepare->fecha)) echo htmlspecialchars($plansepare->fecha, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($plansepare->documento_cliente)) echo htmlspecialchars($plansepare->documento_cliente, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php if (isset($plansepare->nombre_cliente)) echo htmlspecialchars($plansepare->nombre_cliente, ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><a class= "btn btn-success" href="<?php echo URL . 'PlanSepare/editar/' . htmlspecialchars($plansepare->id_plan_separe, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-lead-pencil mdi-18px"></i></a></td>
                    <td><a class= "btn btn-danger" href="<?php echo URL . 'PlanSepare/eliminar/' . htmlspecialchars($plansepare->id_plan_separe, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-delete mdi-18px"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
