


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Sistema Ventas</title>
</head>
<body>
	<header>
		<div class="header">
			
			<h1>Gestión de personal y clientes</h1>
			<div class="optionsBar">
				<p>El Salvador, 07 Junio de 2019</p>
				
				<span class="user"></span>
				JC<img class="photouser" src="img/user.png" alt="Usuario">
				<a href=""><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li class="principal">
					<a href="#">Clientes</a>
					<ul>
						<li><a href="registroClientes.php">Nuevo Cliente</a></li>
						<li><a href="mostrarClientes.php">Lista de Clientes</a></li>
					</ul>
				</li>

				<li class="principal">
					<a href="#">Personal</a>
					<ul>
						<li><a href="registroPersonal.php">Nuevo Personal</a></li>
						<li><a href="mostrarPersonal.php">Lista de Personal</a></li>
					</ul>
				</li>
				
				<li class="principal">
					<a href="#">Otros</a>
					<ul>
						<li><a href="rpersonal.php">Reportes</a></li>
						<li><a href="gpersonal.php">Gráficas</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<section id="container">
		<h1>Bienvenido al sistema</h1>
	</section>
</body>
</html>