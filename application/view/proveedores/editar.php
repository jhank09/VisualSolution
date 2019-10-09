<div class="container">
  <br>
        <h1 class="text-center">Editar proveedor</h1>
        <div class="box">
        <form action="<?php echo URL; ?>Proveedores/actualizarproveedor" method="POST">
            <label>Nombre</label>
            <input autofocus type="text" name="nombre_proveedor" value="<?php echo htmlspecialchars($pro->nombre_proveedor, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Teléfono</label>
            <input type="text" name="telefono" value="<?php echo htmlspecialchars($pro->telefono, ENT_QUOTES, 'UTF-8'); ?>" required />
            <input type="hidden" name="id_proveedor" value="<?php echo htmlspecialchars($pro->id_proveedor, ENT_QUOTES, 'UTF-8'); ?>" />
            <input class="btn btn-success" type="submit" name="btnguardaredit" value="Actualizar" />
        </form>
        </div>
    </div>
