<?php
include('conexion.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
/*
session_start();
$_SESSION['usuario'] = $usuario;
*/

$consulta="SELECT*FROM personal where usuario='$USUARIO' and password='$PASSWORD'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Usuario o contraseña incorrecto</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
