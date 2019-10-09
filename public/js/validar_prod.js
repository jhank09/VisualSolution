function validar() {
    var nombre, valor, marca, cantidad;
    nombre = $("#nombre").val();
    valor = $("#valor").val();
    marca = $("#marca").val();
    cantidad = $("#cantidad").val();

    if (nombre == "" || valor == "" || marca == "" || cantidad == "") {
        $("#msn_nombre").html("*Campo requerido").css("color", "red");
        $("#msn_valor").html("*Campo requerido").css("color", "red");
        $("#msn_marca").html("*Campo requerido").css("color", "red");
        $("#msn_cantidad").html("*Campo requerido").css("color", "red");
        $("#msn_categoria").html("*Campo requerido").css("color", "red");
        return false;
    }

    if (valor <= 0 || cantidad <= 0) {
        $("#msn_valor").html("No se permiten valores negativos ni cero").css("color", "red");
        $("#msn_cantidad").html("No se permiten valores negativos ni cero").css("color", "red");
        return false;
    }


}

