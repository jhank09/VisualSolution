function validar_formulario() {
    let correo, contraseña, expresion_correo;
    expresion_correo = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
    correo = $("#correo").val();
    contraseña = $("#contraseña").val();

    if (correo == "" || contraseña == "") {
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


}

//jQuery(document).on("submit", "#loginForm", function (event) {
//    let correo = $("#correo").val();
//    let contraseña = $("#contraseña").val();
//
//    event.preventDefault();
//    jQuery.ajax({
//        url: uri + "Login/logueo",
//        type: 'POST',
//        dataType: 'json'
//    }).done(function (respuesta) {
//       
//    }).fail(function (resp) {
//        console.log(resp);
//    });
//
//});

