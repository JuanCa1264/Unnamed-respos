<!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro</title>
</head>
<style type="text/css">
	body{
		background-color: gray;
		color:white;
	}

	#enviar{
		background-color: green;
		border-style: none;
		width: 100px;
		height: 20px;
		color: white;
	}

</style>
<body>
	<form action="logica/procesoRegistrarCliente.php" method="POST">
		<label>Id</label><br><input type="number" name="id" required min="0"><br><br>
		<label>Nombre</label><br><input type="text" name="nombre" required><br><br>
		<label>Apellido</label><br><input type="text" name="apellido" required><br><br>
		<label>Dirección</label><br><input type="text" name="direccion" required><br><br>
		<label>Teléfono</label><br><input type="text" name="telefono" required><br><br>
		<label>Personal que lo atendió</label><br><select name="personal" id="" required><br><br>
			<option value="" disabled selected>Seleccione una opción</option>
			<?php 

			include 'logica/conexion.php';

			 $query = "Select * from personal";
                $result = mysqli_query($conexion, $query) or die ("Ocurrio un error");
                while (($row = mysqli_fetch_array($result)) != NULL) {
                echo '<option value="'.$row["ID_P"].'">'.$row["Nombre_P"]." ".$row["Apellido_P"].'</option>';
                
                }

			?>
		</select>
		
		<br><br>
		
		<input id="enviar" type="submit" name="enviar" value="Registrar">
	</form>

</body>
</html>