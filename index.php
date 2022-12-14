<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FibracCoop</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">            
    </head>
    
    <body class="bg-image">
        <div id="login">            
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        
                        <div id="login-box" class="col-md-12 bg-light text-dark">
                            <form id="formLogin" class="form" action="" method="post">
                                <div class="text-center">
                                    <img class="mb-4 mt-4 display-4" src="img/logo fibra2.jpg" alt="" width="" height="57">
                                </div>                                
                                <h3 class="text-center text-dark">Inicia Sesión</h3>
                                <div class="form-group w-50 mx-5">
                                    <label for="usuario" class="text-dark">Usuario</label>
                                    <input type="text" name="usuario" id="usuario" class="form-control">
                                </div>
                                <div class="form-group w-50 mx-5 mt-2">
                                    <label for="password" class="text-dark">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                
                                <div class="form-gropu text-center mt-4">
                                    <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Ingresar">
                                    <p class="mt-4 mb-3 text-muted fs-4">&copy; FibraCoop</p>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>         
        </div>

     <script src="jquery/jquery-3.6.3.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="main.js"></script>    
    </body>
</html>