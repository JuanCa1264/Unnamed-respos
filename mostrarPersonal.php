<?php 
include 'logica/conexion.php';
include 'logica/procesoMostrarPersonal.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.min.css">
</head>
<style type="text/css">

  #customers{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
  }

  .button4{
    border-radius: 10px;
    font-size: 10px;
    padding: 10px 10px;
    float: right;
    display: inline-block;
    margin: 20px auto;
  }

  #customers td, #customers th{
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even){
    background-color: #f2f2f2;
  }

  #customers tr:hover {background-color: #ddd;}

  #customers th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white; 
  }

</style>
<body>
  <table id="customers">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Cargo</th>
      <th>Teléfono</th>
      <th>Departamento</th>
     
      
      
      <th colspan="2">Acciones</th>
    </tr>
    <?php 
      $salida = "";
      while ($mostrar=mysqli_fetch_array($consulta)) {
        
        $salida.= "<tr>";
        $salida.= "<td>". $mostrar['ID_P']. "</td>".
        "<td>". $mostrar['Nombre_P']. "</td>".
        "<td>". $mostrar['Cargo']. "</td>".
        "<td>". $mostrar['Telefono']. "</td>".
        "<td>". $mostrar['Departamento']. "</td>".
        
        "<td><a href='modificarPersonal.php?id=". $mostrar['ID_P'] ."'><button type='button' class='btn btn-success'>Modificar</button></a></td>".
        "<td><a href='logica/eliminarPersonal.php?id=". $mostrar['ID_P'] . "'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>".
        "</tr>";
      }
      echo $salida;
    ?>

  </table>

</body>
</html>