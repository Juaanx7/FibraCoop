<?php

include_once "../bd/crud.php";
$objeto = new $conexion();
$conexion = $objeto->Conectar();

//Recepcion de los datos  enviados mediante el metodo POST desde el js
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$mac = (isset($_POST['mac'])) ? $_POST['mac'] : '';
$posicion = (isset($_POST['posicion'])) ? $_POST['posicion'] : '';
$abono = (isset($_POST['abono'])) ? $_POST['abono'] : '';
$ssid = (isset($_POST['ssid'])) ? $_POST['ssid'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$consulta = "INSERT INTO clientesfc (nombre, mac, posicion, abono, ssid, password) VALUES ("$nombre", "$mac", "$posicion", "$abono", "$ssid", "$password") ";
$resultado = $conexion-prepare($consulta):
$resultado->execute();

