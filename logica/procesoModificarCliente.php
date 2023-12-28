<?php

require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];


$sql = "update clientes set Nombre_C = '$nombre', Apellido_C = '$apellido', Direccion = '$direccion', Telefono = '$telefono' where ID = '$id' ";

$resultado = $conexion->query($sql);

if ($conexion->query($sql)==TRUE) {
	
	echo '<script language = javascript>
	alert ("Datos modificados correctamente.")
	self.location = "../mostrarClientes.php"</script>';

}

else{
	echo '<script language = javascript> 
	alert("No se pudo modificar el registro.")
	self.location = "../mostrarClientes.php"</script>';
}

?>