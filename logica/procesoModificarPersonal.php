<?php

require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$telefono = $_POST['telefono'];
$departamento = $_POST['departamento'];


$sql = "update personal set Nombre_P = '$nombre', Cargo = '$cargo', Telefono = '$telefono', Departamento = '$departamento' where ID_P = '$id' ";

$resultado = $conexion->query($sql);

if ($conexion->query($sql)==TRUE) {
	
	echo '<script language = javascript>
	alert ("Datos modificados correctamente.")
	self.location = "../mostrarPersonal.php"</script>';

}

else{
	echo '<script language = javascript> 
	alert("No se pudo modificar el registro.")
	self.location = "../mostrarPersonal.php"</script>';
}

?>