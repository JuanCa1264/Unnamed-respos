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
	<form action="logica/procesoRegistrarPersonal.php" method="POST">
		<label>Id</label><br><input type="number" name="id" required min="0"><br><br>
		<label>Nombre</label><br><input type="text" name="nombre" required><br><br>
		<label>Cargo</label><br><input type="text" name="cargo" required><br><br>
		<label>Telefono</label><br><input type="text" name="telefono" required><br><br>
		<label>Departamento</label><br><input type="text" name="departamento" required><br><br>
		
		
		<input id="enviar" type="submit" name="enviar" value="Registrar">
	</form>

</body>
</html>