<?php
/* include('conexion.php');

$USUARIO=(isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$PASSWORD=(isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($PASSWORD); //encripto la clave enviada por el usuario para compararla con la clave encriptaday almacenada en la bd.

$consulta="SELECT*FROM personal where usuario='$USUARIO' and password='$pass'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../pages/home.html");
}else{
    include("index.php");
    ?>
    <h1 class="bad">Usuario o contraseña incorrecto</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
*/

// PRUEBA 2

session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM personal WHERE usuario='$usuario' AND password='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

?>