<?php  
require 'conexion.php';
 $id=$_POST['id'];
 $nombre=$_POST['nombre'];
 $cargo=$_POST['cargo'];
 $telefono = $_POST['telefono'];
 $departamento = $_POST['departamento'];

 


$insertar="INSERT INTO personal values ($id,'$nombre','$cargo','$telefono','$departamento')";

if($conexion->query($insertar)==TRUE){
	echo '<script language = javascript> 
	alert("Datos de almacenados correctamente.")
	self.location = "../menu.php"</script>';
}else{
	echo '<script language = javascript> 
	alert("No se pudo realizar el registro  correctamente.");
	self.location = "../menu.php"</script>';
}


?>