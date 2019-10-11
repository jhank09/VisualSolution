<div class="container">
    <br>
    <h1 class="text-center">Clientes</h1>

    <a class= "btn btn-primary" name="agregar" href="<?php echo URL . 'clientes/agregarcliente' ?>" 
       role="button"><i class="mdi mdi-account-multiple-plus"></i>   Agregar</a>
    <br>
    <br>
    <table id="example" class="table table-hover table-bordered">
        <thead class="">
            <tr>
                <td><b>Documento</b></td>
                <td><b>Nombre Cliente</b></td>
                <td><b>Teléfono</b></td>
                <td><b>Editar</b></td>
                <td><b>Eliminar</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cli as $cliente) { ?>
                <tr>
                    <td><?php if (isset($cliente->documento)) echo htmlspecialchars($cliente->documento, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($cliente->nombre_cliente)) echo htmlspecialchars($cliente->nombre_cliente, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($cliente->telefono)) echo htmlspecialchars($cliente->telefono, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a class= "btn btn-success" href="<?php echo URL . 'Clientes/editar/' . htmlspecialchars($cliente->id_cliente, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-lead-pencil mdi-18px"></i></a></td>
                    <td><a class= "btn btn-danger" href="<?php echo URL . 'Clientes/eliminar/' . htmlspecialchars($cliente->id_cliente, ENT_QUOTES, 'UTF-8'); ?>"><i class="mdi mdi-delete mdi-18px"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
