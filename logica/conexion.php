<?php   
$usuario="root";
$contraseña="";

$servidor="localhost";
$basededatos="odontologia";

$conexion=mysqli_connect($servidor,$usuario, "", $basededatos) or die("No se ha podido conectar al servidor de Base de datos");
?>