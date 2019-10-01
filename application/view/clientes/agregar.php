
<div class="container">
    <br>
    <h1 class="text-center">Agregar Cliente</h1>
    <div class="box">
        <form action="<?php echo URL; ?>Clientes/agregar" method="POST">
            <label>Documento</label>
            <input type="number" name="documento" value="" required />
            <label>Nombre Cliente</label>
            <input type="text" name="nombre_cliente" value="" required />
            <label>Teléfono</label>
            <input type="number" name="telefono" value="" required />
            <input type="submit" class="btn btn-success" name="btnguardar" value="Guardar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>clientes" />Regresar a clientes</a>
        </form>

    </div>
