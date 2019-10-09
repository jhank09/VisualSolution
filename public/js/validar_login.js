function validar_formulario() {
    let correo, contraseña, expresion_correo;
    expresion_correo = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
    correo = $("#correo").val();
    contraseña = $("#contraseña").val();

    if (contraseña == "" || contraseña == "") {
        $("#mensaje").html("*campo requerido").addClass("alert alert-danger");
        $("#mensaje2").html("*campo requerido").addClass("alert alert-danger");
        return false;
    }
    if (correo == "") {
        $("#mensaje").html("*campo requerido").css("color", "red");

        return false;
    } else if (contraseña == "") {
        $("#mensaje2").html("*campo requerido").css("color", "red");
        return false;
    }
    if (!expresion_correo.test(correo)) {
        $("#mensaje").html("Formato de correo invalido").css("color", "red");
        return false;
    } else {
        return true;
    }

    $.ajax({
        type: 'post',
        dataType: 'json',
        url: uri + 'Login/logueo',
    }).done((respuesta) => {
        respuesta.forEach((e, i) => {
            let correobd = e.correo;
            let contraseñabd = e.contraseña;

            if (correobd != correo || contraseñabd != contraseña) {
                $("#mensaje").html("*Correo o contraseña invalida").css("color", "red");
                return false;
            }

        });

    });
}

