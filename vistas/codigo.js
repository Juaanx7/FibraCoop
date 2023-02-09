$(document).ready(function () {
    tablaClientes = $('#tablaClientes').DataTable({
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-primary btnBorrar'>Borrar</button></div></div>"
        }],
        //Traduccion a español
        'language': {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },

    });

//Boton para nuevo cliente:
    //Diseño:
$("#btnNuevo").click(function(){
    $("#formClientes").trigger("reset");
    $(".modal-header").css("background-color", "#198754");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo cliente");
    $("#modalCRUD").modal("show");
});

    //Funcionalidad:
$("#formClientes").submit(function(e){
    e.preventDefault();
    id = $.strim(("#id").val());
    nombre = $.strim(("#nombre").val());
    mac = $.strim(("#mac").val());
    posicion = $.strim(("#posicion").val());
    abono = $.strim(("#abono").val());
    ssid = $.strim(("#ssid").val());
    password = $.strim(("#password").val());

    $.ajax({
        url: "../bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, mac:mac, posicion:posicion, abono:abono, ssid:ssid, password:password},
        succes: function(data){
            var datos = JSON.parse(data);
            id = datos[0].id;
            nombre = datos[0].nombre;
            mac = datos[0].mac;
            posicion = datos[0].posicion;
            abono = datos[0].abono;            
            ssid = datos[0].ssid;
            password = datos[0].password;
            tablaClientes.row.add([id, nombre, mac, posicion, abono, ssid, password]).draw();
        }                
    })
    $("#modalCRUD").modal("hide");
});

//Boton para modificar cliente:


//Boton para eliminar cliente:


});