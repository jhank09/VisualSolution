
<div class="container">
    <br>
    <h1 class="text-center">Agregar Plan Separe</h1>
    <div class="box">
        <form action="<?php echo URL; ?>PlanSepare/agregar" method="POST">
            <label>Abono</label>
            <input type="number" name="abono" value="" required min="1" />
            <label>Nombre Cliente</label>
            <select name="id_cliente" id="" required="">
                        <option></option>
                        <?php foreach ($cli as $Cli): ?>
                            <option value="<?= $Cli->id_cliente ?>"><?= $Cli->nombre_cliente ?></option>
                        <?php endforeach; ?>
            </select>
            <input type="submit" class="btn btn-success" name="btnguardar" value="Agregar" />
            <br>
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>plansepare" />Regresar</a>
            <br>
            <br>
        </form>

    </div>
