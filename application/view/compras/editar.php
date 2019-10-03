<div class="container">
    <br>
    <h1 class="text-center">Editar Compra</h1>
    <div class="box">
        <form action="<?php echo URL; ?>compras/actualizarcompra" method="POST">
            <label>Valor de la compra</label>
            <input type="text" name="valor_compra" value="<?php echo $com->valor_compra; ?>" required min/>
            
            <input type="hidden" name="id_compra" value="<?php echo $com->id_compra; ?>" />
            <input type="submit" name="btnguardaredit" class="btn btn-success" value="Actualizar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>compras" />Regresar</a>
        </form>
    </div>
</div>