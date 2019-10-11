function validar_usuario() {
    let contraseña, correo, expresion_correo;
    expresion_correo = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
    correo = $("#correo").val();
    contraseña = $("#contraseña").val();
    
   

    if (correo == "" || contraseña == "") {
        $("input[name=correo]").css("border-color", "red");
        $("input[name=password]").css("border-color", "red");
        $("select[name=rol]").css("border-color", "red");
        $("select[name=estado]").css("border-color", "red");
        $("#msn1").html("*campo requerido").addClass("alert alert-danger");
        $("#msn2").html("*campo requerido").addClass("alert alert-danger");
        $("#msn3").html("*campo requerido").addClass("alert alert-danger");
        $("#msn4").html("*campo requerido").addClass("alert alert-danger");
        return false;
    } else {
        $("#msn1").html("").removeClass("alert alert-danger");
        $("#msn2").html("").removeClass("alert alert-danger");
        $("#msn3").html("").removeClass("alert alert-danger");
        $("#msn4").html("").removeClass("alert alert-danger");

        $("input[name=correo]").css("border-color", "green");
        $("input[name=password]").css("border-color", "green");
        $("select[name=rol]").css("border-color", "green");
        $("select[name=estado]").css("border-color", "green");

        return false;
    }

    

}