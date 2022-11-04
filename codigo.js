$("#formlogin").submit(function(e){
    e.preventDeFault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == "" || password.length == "") {
        swal("Ups!", "Debes escribir un usuario y una contraseña!", "error");
        return false;
    } else {
        $.ajax({
            url: "bd/validar.php",
            type: "POST",
            datatype: "json",
            data: { usuario: usuario, password: password },
            succes: function (data) {
                if (data == "null") {
                    swal("Ups!", "Usuario y/o contraseña incorrecta!", "error");
                } else {
                    swal("Conexion exitosa!", "succes")
                    .then((result) => {
                        if (result.value) {
                            window.location.href = "../pages/home.html";
                        }
                    })
                }
            }
        })
    }
});