
<?php

include 'logica/conexion.php';

$where = "";

$id=$_GET['id'];

$sql="SELECT * from clientes where ID='$id'";

$resultado=$conexion->query($sql);
$fila = $resultado->fetch_array(MYSQLI_ASSOC);

?>




<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap4/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap4/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
      </div>
      
      <form class="form-horizontal" method="POST" action="logica/procesoModificarCliente.php" autocomplete="off">
        <div class="form-group">
          <label for="id_usu" class="col-sm-2 control-label">Identificador</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="id_usu" name="id" value="<?php echo $fila['ID'];?>" placeholder="" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="usu" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="usu" name="nombre" value="<?php echo $fila['Nombre_C']?>" placeholder="usuario"  required>
          </div>
        </div>

        <div class="form-group">
          <label for="contra" class="col-sm-2 control-label">Apellido</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $fila['Apellido_C']?>" id="contra" name="apellido" placeholder="****"  required>
          </div>
        </div>

        <div class="form-group">
          <label for="nom" class="col-sm-3 control-label">Deparmento</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" name="direccion" value="<?php echo $fila['Direccion']?>" placeholder=""  required>
          </div>
        </div>
    

        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Teléfono</label>
          <div class="col-sm-10">
            <input type="text" value="<?php echo $fila['Telefono']?>" class="form-control" id="email" name="telefono" placeholder="ejemplo@.com" required>
          </div>
        </div>

       
        
      
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="mostrarClientes.php" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>