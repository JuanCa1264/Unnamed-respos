<?php 
	require 'conexion.php';

	$mostrar = "SELECT * FROM personal ORDER BY ID_P";
	$consulta = mysqli_query($conexion,$mostrar);
	


?>