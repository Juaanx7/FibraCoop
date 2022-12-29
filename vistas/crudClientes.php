<?php
session_start();
if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT id, Nombre, MAC, Posicion, Abono, SSID, Pass FROM clientes";
$resultado  = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FibraCoop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../estilos.css">
    <!-- <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"> -->
    <!--     <link rel="stylesheet" type="text/css" href="../DataTables/DataTables-1.13.1/css/dataTables.bootstrap5.min.css"> -->
</head>
<body class="bg-image">
    <header>
        <div class="text-center">
            <img class="mb-4 mt-4 display-4" src="../img/logo fibra2.jpg" alt="" width="" height="57">
        </div>        
        <h2 class="text-center text-dark">Listado de clientes</h2>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-success">Nuevo cliente</button>
            </div>
        </div>
    </div>

    <!-- Comienza CRUD -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>MAC</th>
                                <th>Posicion</th>
                                <th>Abono</th>
                                <th>SSID</th>
                                <th>Password</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data as $dat) {
                                ?>

                                    <tr>
                                        <td> <?php echo $dat ['id'] ?> </td>
                                        <td> <?php echo $dat ['Nombre'] ?> </td>
                                        <td> <?php echo $dat ['MAC'] ?> </td>
                                        <td> <?php echo $dat ['Posicion'] ?> </td>
                                        <td> <?php echo $dat ['Abono'] ?> </td>
                                        <td> <?php echo $dat ['SSID'] ?> </td> 
                                        <td> <?php echo $dat ['Password'] ?> </td>
                                    </tr> 
                                <?php                                      
                                }
                                ?>
                            <!-- 
                              <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                               <div class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btnEditar">Editar</button>
                                        <button class="btn btn-primary btnBorrar">Borrar</button>
                                    </div>
                               </div> 
                            </td>  
                             -->                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Finaliza CRUD -->

    <!-- Modal para botones -->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formClientes">
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">MAC</label>
                        <input type="text" class="form-control" id="mac">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Posicion</label>
                        <input type="text" class="form-control" id="posicion">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Abono</label>
                        <input type="text" class="form-control" id="abono">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">SSID</label>
                        <input type="text" class="form-control" id="ssid">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Password</label>
                        <input type="text" class="form-control" id="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Finaliza modal -->

    <script src="jquery/jquery-3.6.3.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
    <script src="popper/popper.min.js"></script>        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="codigo.js"></script>
</body>
</html>