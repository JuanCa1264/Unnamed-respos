
<?php
require 'logica/conexion.php';



$where = "";

$id=$_GET['id'];

$sql="SELECT * from personal where ID_P='$id'";

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
      
      <form class="form-horizontal" method="POST" action="logica/procesoModificarPersonal.php" autocomplete="off">
        <div class="form-group">
          <label for="id_usu" class="col-sm-2 control-label">Identificador</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="id_usu" name="id" value="<?php echo $fila['ID_P'];?>" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="usu" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="usu" name="nombre" value="<?php echo $fila['Nombre_P']?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="contra" class="col-sm-2 control-label">Cargo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $fila['Cargo']?>" id="cargo" name="cargo" required>
          </div>
        </div>

        <div class="form-group">
          <label for="nom" class="col-sm-3 control-label">Telfono</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" name="telefono" value="<?php echo $fila['Telefono']?>" required>
          </div>
        </div>
    

        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Departamento</label>
          <div class="col-sm-10">
            <input type="text" value="<?php echo $fila['Departamento']?>" class="form-control" id="email" name="departamento" required>
          </div>
        </div>

       

       
        
      
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="mostrarPersonal.php" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>