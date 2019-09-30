<div class="container">
    <br>
    <h1 class="text-center">Editar Servicio</h1>
    <div class="box">
        <form action="<?php echo URL; ?>Servicios/actualizarservicios" method="POST">
            <label>Tipo de servicio</label>
            <input type="text" name="id_tipo_servicio" value="<?php echo $ser->id_tipo_servicio; ?>" required m/>
            <label>Valor del servicio</label>
            <input type="number" name="valor_servicio" value="<?php echo $ser->valor_servicio; ?>" required />
            <input type="hidden" name="id_servicio" value="<?php echo $ser->id_servicio; ?>" />
            <input type="submit" name="btnguardaredit" class="btn btn-success" value="Actualizar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>servicios" />Regresar</a>
        </form>
    </div>
</div>