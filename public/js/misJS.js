$(document).ready(function () {
    usuario.listar_usuario();
});
var usuario = {
    listar_usuario: function () {
        $.ajax({
            type: 'get',
            dataType: 'json',
            url: uri + "Usuario/listar",
        }).done((respuesta) => {
            $("#tbl_usuario tbody").empty();
            respuesta.forEach((e, i) => {
                let estado = e.estado == 1 ? "activo" : "Inactivo";
                let rol = e.id_rol;
                let nombre_rol = "";

                if (rol == 1) {
                    nombre_rol = "Administrador";
                } else if (rol == 2) {
                    nombre_rol = "Encargado";
                } else if (rol == 3) {
                    nombre_rol = "Encargado";
                } else if (rol == 4) {
                    nombre_rol = "Empleado";
                }
                let btn_editar = "<a href='" + uri + "Usuario/modificar/" + e.id_usuario + "' class='btn btn-primary btn-sm'>Editar</a>";
                let btn_cambiar_estado = "";
                if (e.estado == 1) {
                    btn_cambiar_estado = "<a onclick='cambiar_estado_usuario(" + e.id_usuario + ",0)' class='btn btn-danger btn-sm'>Inactivar</a>";
                } else if (e.estado == 0) {
                    btn_cambiar_estado = "<a onclick='cambiar_estado_usuario(" + e.id_usuario + ",1)' class='btn btn-success btn-sm'>Activar</a>";

                }
                let btn_ver_detalle = "<a onclick='ver_detalle_usuario(" + e.id_usuario + ")' class='btn btn-info btn-sm'>Ver</a>";

                $("#tbl_usuario tbody").append
                        ("<tr><td>" + e.id_usuario +
                                "</td><td>" + e.correo + "</td><td>" + e.contraseña +
                                "</td><td>" + nombre_rol + "</td><td>" + estado +
                                "</td><td>" + btn_cambiar_estado + " " + btn_editar + "</td></tr>");
            });
        });
    }
}
function cambiar_estado_usuario(id, estado) {
    $.ajax({
        type: 'get',
        dataType: 'text',
        url: uri + "Usuario/cambiar/" + id + "/" + estado
    }).done((respuesta) => {
        if (respuesta == "1") {
            if (estado == 1) {
                // Swal.fire('Bien echo!', 'El estado es activo!', 'success');
                alertify.success('Activo');
            } else {
                //  Swal.fire('atencion!', 'el estado es inactivo!', 'warning');
                alertify.error('Inactivo');
            }
        } else {
            alert("No se modifico el estado    " + id + "   " + estado);
        }
        usuario.listar_usuario();
    });
}





