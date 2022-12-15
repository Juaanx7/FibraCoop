<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos.css">
</head>

<body class="bg-image container text-center">
    <main class="p-10 col container text-center">
        <div class="p-2">
            <img class="mb-4" src="../img/logo fibra2.jpg" alt="" width="" height="57">
        </div>
        <!-- Busqueda -->
        <div class="row w-25">
            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 fs-5" type="search" placeholder="Busque el cliente"
                            aria-label="Search">
                        <button class="btn btn-outline-success fs-5" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
            <!-- Finaliza busqueda -->
        </div>
        <div class="row">
            <table class="table table-bordered table-responsive table-light w-75">
                <thead class="table-dark text-center fs-5">
                    <tr>
                        <th scope="col">Nombre cliente</th>
                        <th scope="col">Datos Cliente</th>
                    </tr>
                </thead>
                <tbody class="text-start fs-5">
                    <tr>
                        <th scope="row">MAC</th>
                        <td>00:02:71:96:78:86</td>
                    </tr>
                    <tr>
                        <th scope="row">Posicion</th>
                        <td>1/4</td>
                    </tr>
                    <tr>
                        <th scope="row">Abono</th>
                        <td colspan="2">10mb</td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre de Red</th>
                        <td colspan="2">FIBRACOOP_LaSelvita</td>
                    </tr>
                    <tr>
                        <th scope="row">Contraseña</th>
                        <td colspan="2">negritasabat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <a class="fixed-bottom link-dark fs-5 mb-3" href="200.45.79.36" target=”_blank” rel=”nofollow”>Ingrese a ISP</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>