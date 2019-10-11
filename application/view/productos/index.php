
<div class="container">
    <h1 class="text-center"> Listado de productos</h1>

    <a class= "btn btn-primary" name="agregar" href="<?php echo URL . 'Producto/vistaCrear'?>" 
       role="button"><i class="fa fa-cart-plus"></i> Agregar</a>
    <br>
    <br>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <div class="container">
                    <table id="example" class="table table-hover table-bordered" >
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombe</th>
                                <th>Valor</th>
                                <th>Marca</th>
                                <th>Categoria</th>
                                <th>cantidad</th> 
                                <th>Imagen</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productos as $p): ?>
                                <tr> 
                                    <td><?= $p->nombre_producto; ?></td>
                                    <td><?= $p->valor_producto; ?></td>
                                    <td><?= $p->marca; ?></td>
                                    <td><?= $p->categoria; ?></td>
                                    <td><?= $p->cantidad; ?></td>
                                    <td><img class="w-25" src="<?php echo URL . "public/img/" . $p->imagen_producto; ?>" alt="<?= $p->nombre_producto; ?>"></td>
                                    <td><a href="<?= URL . 'Producto/editar/' . $p->id_producto; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="<?= URL . 'Producto/eliminar/' . $p->id_producto; ?>" class="btn btn-info"> <i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                            <?php endforeach; ?>              
                        </tbody>        
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>




