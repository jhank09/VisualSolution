<div class="container">
    <form action="<?= URL; ?>Usuario/actualizar" method="post">
        <div class="row">
            <input type="hidden" name="id_user" value="<?=$usuario->id_usuario?>">
            <div class="col-3">
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" name="correo" class="form-control" value="<?=$usuario->correo?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="contraseña" class="form-control" value="<?=$usuario->contraseña?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Rol</label>
                    <select name="rol" class="form-control">
                        <option>Seleccione</option>
                        <?php foreach ($roles as $r): ?>
                            <option value="<?= $r->id_rol ?>"><?= $r->nombre_rol ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <label>Estado</label>
                <select name="estado" class="form-control">
                    <option>Seleccione estado:</option>
                    <option value="<?= 1 ?>">Activo</option>
                    <option value="<?= 0 ?>">Inactivo</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>