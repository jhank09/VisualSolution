<div class="container">
    
    <br>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Agregar nuevo producto</h1>
            <form action="<?= URL ?>Producto/guardar" method="post" enctype="multipart/form-data" onsubmit="return validar()" novalidate="">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group mt-5">
                            <label>Nombre Producto</label>
                            <input type="text" name="nombre_producto" id="nombre" class="form-control" placeholder="nombre del producto">
                            <p class="" id="msn_nombre"> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mt-5">
                            <label>Valor</label>
                            <input type="number" name="valor" id="valor" class="form-control" placeholder="Digite el precio">
                            <p class="" id="msn_valor"> </p>                   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mt-5">
                            <label>Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" placeholder="La marca es?">
                            <p class="" id="msn_marca"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mt-5">
                            <label>Categoria Producto</label>
                            <select class="form-control" name="categoria" id="">
                                <option></option>
                                <?php foreach ($categorias as $c): ?>
                                    <option value="<?= $c->id_categoria_producto ?>"><?= $c->nombre_categoria_producto ?></option>
                                <?php endforeach; ?>
                            </select>
                            <p class="" id="msn_categoria"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mt-5">
                            <label>Cantidad</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Cuantos?">
                            <p class="" id="msn_cantidad"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mt-5">
                            <label>Imagen</label>
                            <div class="custom-file">                                
                                <label class="custom-file-label" for="inputGroupFile04"></label>
                                <input type="file" name="imagen" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" class="custom-file-input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" name="btnGuardar" class="btn btn-info">Guardar</button>
                </div>
            </form>   
        </div>
    </div>
</div>