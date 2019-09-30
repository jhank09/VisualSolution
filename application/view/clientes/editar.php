<div class="container">
    <br>
    <h1 class="text-center">Editar Cliente</h1>
    <div class="box">
        <form action="<?php echo URL; ?>Clientes/actualizarcliente" method="POST">
            <label>Documento</label>
            <input type="number" name="documento" value="<?php echo htmlspecialchars($cli->documento, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Nombre Cliente</label>
            <input type="text" name="nombre_cliente" value="<?php echo htmlspecialchars($cli->nombre_cliente, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Teléfono</label>
            <input type="number" name="telefono" value="<?php echo htmlspecialchars($cli->telefono, ENT_QUOTES, 'UTF-8'); ?>" required />
            <input type="hidden" name="id_cliente" value="<?php echo htmlspecialchars($cli->id_cliente, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="btnguardaredit" class="btn btn-success" value="Actualizar" />
            <br>
            <a type="button" class="btn btn-outline-primary float-sm-right" name="regresar" role="button" href="<?php echo URL; ?>clientes" />Regresar</a>
        </form>
    </div>
</div>