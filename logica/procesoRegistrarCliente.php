<?php  
require 'conexion.php';
 $id=$_POST['id'];
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $direccion = $_POST['direccion'];
 $telefono =$_POST['telefono'];
 $personal = $_POST['personal'];
 


$insertar="INSERT INTO clientes values ($id,'$nombre','$apellido','$direccion','$telefono',$personal)";

if($conexion->query($insertar)==TRUE){
	echo '<script language = javascript> 
	alert("Datos de almacenados correctamente.")
	self.location = "../menu.php"</script>';
}else{
	echo '<script language = javascript> 
	alert("No se pudo realizar el registro  correctamente.");
	self.location = "../procesoregistro.php"</script>';
}


?>