<div class="container">
    <form action="<?= URL ?>Producto/actualizar" method="post">
        <div class="row">
            <input type="hidden" name="id_producto" id="id_producto" class="form-control"
                   value="<?= $productos->id_producto?>">

            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre Producto</label>
                    <input type="text" name="nombre_producto" id="nombre" class="form-control" placeholder="nombre del producto"
                           value="<?= $productos->nombre_producto ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Valor</label>
                    <input type="number" name="valor" id="valor" class="form-control"
                           value="<?= $productos->valor_producto ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" placeholder="La marca es?"
                           value="<?= $productos->marca ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option>Seleccione</option>
                        <?php foreach ($categorias as $c): ?>
                            <option value="<?= $c->id_categoria_producto ?>"><?= $c->nombre_categoria_producto ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" name="cantidad" id="marca" class="form-control" placeholder="La marca es?"
                           value="<?= $productos->cantidad ?>">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <button type="submit" name="btnActualizar" class="btn btn-success">Actualizar</button>
        </div>
    </form>     
</div>