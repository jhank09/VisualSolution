<div class="container">
  <form action="<?= URL ?>Producto/guardar" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Nombre Producto</label>
          <input type="text" name="nombre_producto" id="" class="form-control" placeholder="nombre del producto" required="">
          <p class="valid-feedback"> Buen trabajo</p>
          <p class="invalid-feedback">Campo requerido</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Valor</label>
          <input type="number" name="valor" id="" class="form-control" required="" placeholder="Digite el precio">
          <p class="valid-feedback"> Buen trabajo</p>
          <p class="invalid-feedback">Campo requerido</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Marca</label>
          <input type="text" name="marca" id="" class="form-control" placeholder="La marca es?" required="">
          <p class="valid-feedback"> Buen trabajo</p>
          <p class="invalid-feedback">Campo requerido</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Categoria Producto</label>
          <select class="form-control" name="categoria" id="" required="">
            <option></option>
            <?php foreach ($categorias as $c): ?>
              <option value="<?= $c->id_categoria_producto ?>"><?= $c->nombre_categoria_producto ?></option>
            <?php endforeach; ?>
          </select>
          <p class="valid-feedback"> Buen trabajo</p>
          <p class="invalid-feedback">Campo requerido</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Cantidad</label>
          <input type="text" name="cantidad" id="" class="form-control" placeholder="Cuantos?" required="">
          <p class="valid-feedback"> Buen trabajo</p>
          <p class="invalid-feedback">Campo requerido</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Imagen Producto</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="imagen" required="" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
            <label class="custom-file-label" for="inputGroupFile04">Imagen</label>
          </div>
          <p class="valid-feedback"> Buen trabajo</p>
          <p class="invalid-feedback">Campo requerido</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <button type="submit" name="btnGuardar" class="btn btn-info">Guardar</button>
    </div>
  </form>
</div>

<br>
<br>
<br

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
                <td><?= $p->nombre_producto;?></td>
                <td><?= $p->valor_producto;?></td>
                <td><?= $p->marca; ?></td>
                <td><?= $p->id_categoria_producto; ?></td>
                <td><?= $p->cantidad; ?></td>
                <td><img class="w-25" src="<?php echo URL."public/img/".$p->imagen_producto;?>" alt="<?= $p->nombre_producto;?>"></td>
                <td><a href="<?= URL. 'Producto/editar/' . $p->id_producto; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                <td><a href="<?= URL . 'Producto/eliminar/' . $p->id_producto; ?>" class="btn btn-info"> <i class="fas fa-trash-alt"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
