$('#formlogin').submit(function(e){
    e.preventDeFault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    
    if(usuario.length == "" || password.length == ""){
        swal("Ups!", "Debes escribir un usuario y una contraseña!", "error");
    }
});