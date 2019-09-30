
<div class="container">
  <br>
  <h1 class="text-center ">Agregar Proveedor</h1>
  <div class="box">
    <form action="<?php echo URL; ?>Proveedores/agregar" method="POST">
      <label>Nombre</label>
      <input type="text" name="nombre_proveedor" value="" required />
      <label>Teléfono</label>
      <input id="telefono" type="number" name="telefono" value="" required onChange="validarSiNumero(this.value);"/>
      <input class="btn btn-success" onclick="validartp();" type="submit" name="btnguardar" value="Guardar" />
    </form>
  </div>

  <script>
  function validarSiNumero(telefono){

    if (!/^([0-9])*$/.test(telefono)){
    Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: 'Solo numeros positivos',
    })
    return false;
}

    if (telefono.length == 10 || !/^([0-9])*$/.test(telefono)){

    Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: 'Sólo se permiten maximo 10 numeros',
    })
    return false;
  }


    if (telefono.length < 7) {
      Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Sólo se permiten minimo 7 maximo 10 numeros',
      })
      return false;
    }

  }
</script>
