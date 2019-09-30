<div class="container">
    <br>
    <h1 class="text-center">Agregar compra</h1>
    <div class="box">
        <form action="<?php echo URL; ?>compras/agregar" method="POST">
            <label>Valor de la compra</label>
            <input type="number" name="valor_compra" value="" required min="1" />
            <input type="submit" class="btn btn-success" name="btnguardar" value="Guardar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>compras" />Regresar</a>
        </form>

    </div>