$(document).ready( function () {
    tablaClientes = $('#tablaClientes').DataTable({
        "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-primary btnBorrar'>Borrar</button></div></div>"
        }],
        //Traduccion a español
        'language':{
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },

    });
} );