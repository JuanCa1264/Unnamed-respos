<?php 
	require 'conexion.php';

	$mostrar = "SELECT * FROM clientes ORDER BY id";
	$consulta = mysqli_query($conexion,$mostrar);


?>