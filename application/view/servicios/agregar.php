<div class="container">
    <br>
    <h1 class="text-center">Agregar Servicio</h1>
    <div class="box">
        <form action="<?php echo URL; ?>Servicios/agregar" method="POST">
            <label>Id del cliente</label>
            <input type="number" name="id_cliente" value="" required  />
            <label>Descripción</label>
            <input type="texarea" name="descripcion" value="" required />
            <label>Tipo de servicio</label>
            <select name="tipo_servicio">
                <option>Mantenimiento</option>
                <option>Reparación</option>
            </select>
            <label>Valor del servicio</label>
            <input type="number" name="valor_servicio" value="" required min="1" />
            <input type="submit" class="btn btn-success" name="btnguardar" value="Guardar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>servicios" />Regresar</a>
        </form>

    </div>