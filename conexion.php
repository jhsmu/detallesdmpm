<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "detallesdmpm";
#conectar la base de datos 
$conexion = mysqli_connect($host,$user,$pass,$db);
#verificar conexion
if(!$conexion){
    echo "Error de conexion".mysqli_connect_error();
    exit();
}

?>