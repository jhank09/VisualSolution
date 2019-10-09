<div class="card">
    <div class="card-body">
        <div class="container">
            <form id="formulario" action="<?= URL; ?>Usuario/guardarUsuario" method="post">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" class="form-control required">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="check-seguridad form-control" id="myInput" class="required">
                            <input type="checkbox" class="" onclick="myFunction()"> <label>Ver Contraseña</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Rol</label>
                            <select name="rol" class="form-control">
                                <option>Seleccione</option>
                                <?php foreach ($rol as $r): ?>
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
    </div>
</div>
