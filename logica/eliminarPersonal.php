<?php 

require 'conexion.php';

$id = $_GET['id'];

$sql = "delete from personal where ID_P = '$id'";
$resultado = $conexion->query($sql);

if ($conexion->query($sql)==TRUE) {
	echo '<script language = javascript>
	alert("Datos eliminados correctamente.")
	self.location = "../mostrarPersonal.php" </script>';
}
else{
	echo '<script language = javascript>
	alert("No se pudo eliminar el registro debido a que este personal esta relacionado a un cliente.")
	self.location = "../mostrarPersonal.php" </script>';
}

?>