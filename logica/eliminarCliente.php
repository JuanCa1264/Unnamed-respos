<?php 

require 'conexion.php';

$id = $_GET['id'];

$sql = "delete from clientes where ID = '$id'";
$resultado = $conexion->query($sql);

if ($conexion->query($sql)==TRUE) {
	echo '<script language = javascript>
	alert("Datos eliminados correctamente.")
	self.location = "../mostrarClientes.php" </script>';
}
else{
	echo '<script language = javascript>
	alert("No se pudo eliminar el registro.")
	self.location = "../mostrarClientes.php" </script>';
}

?>