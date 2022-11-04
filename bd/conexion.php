<?php
// $conexion=mysqli_connect("localhost","root","","login");

class Conexion{
    public static function Conectar(){
        define('servidor','localhost');
        define('login','login');
        define('usuario','root');
        define('password','');         
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        
        try{
           $conexion = new PDO("mysql:host=".servidor.";login=".login, usuario, password, $opciones);             
           return $conexion; 
        }catch (Exception $e){
            die("El error de Conexión es :".$e->getMessage());
        }         
    }
    
}
?>