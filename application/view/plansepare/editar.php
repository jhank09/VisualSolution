<div class="container">
    <br>
    <h1 class="text-center">Editar Plan Separe</h1>
    <div class="box">
        <form action="<?php echo URL; ?>PlanSepare/actualizarplansepare" method="POST">
            <label>abono</label>
            <input type="number" name="abono" value="<?php echo htmlspecialchars($pla->abono, ENT_QUOTES, 'UTF-8'); ?>" required min="1" />
            <label>Cliente</label>
            <select name="id_cliente">
              <option></option>
              <?php foreach ($cli as $c): ?>
                <option value="<?= $c->id_cliente ?>"><?= $c->nombre_cliente ?></option>
              <?php endforeach;?>
            </select>
            <input type="hidden" name="id_plan_separe" value="<?php echo htmlspecialchars($pla->id_plan_separe, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="btnguardaredit" class="btn btn-success" value="Actualizar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>plansepare" />Regresar</a>
            <br>
            <br>
        </form>
    </div>
</div>
