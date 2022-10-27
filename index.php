<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FibraCoop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="text-center bg-image">      
        <main class="form-signin w-100 m-auto">        
            <form id="formlogin" action="bd/validar.php" method="post">
                <img class="mb-4" src="img/logo fibra2.jpg" alt="" width="" height="57">
                <h1 class="h3 mb-3 fw-normal fs-2">Por favor inicia sesion</h1>        
                <div class="form-floating">
                    <input type="text" class="form-control fs-3" id="usuario" name="usuario">
                    <!-- 
                        <label class="fs-4" for="floatingInput">Ingrese su usuario</label>
                     -->
                    
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control fs-3" id="password" name="password">
                    <!-- 
                        <label  class="fs-4" for="floatingPassword">Ingrese su contraseña</label>
                     -->
                    
                </div>        
                <div class="checkbox m-4">
                    <label>
                        <input class="fs-4" type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <!-- <a href="pages/home.html" class="btn btn-primary stretched-link fs-3">Ingresar</a> -->
                <input type="submit" value="Ingresar">
                <p class="mt-5 mb-3 text-muted fs-4">&copy; FibraCoop</p>
            </form>              
        </main>
    <footer>
        <a class="fixed-bottom link-dark fs-3 mb-3" href="200.45.79.36" target=”_blank” rel=”nofollow”>Ingrese a ISP</a>
    </footer>

    <script>src="js/codigo.js"</script>
    <script>src="jquery/jquery-3.6.1.min.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>