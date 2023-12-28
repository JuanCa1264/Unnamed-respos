<?php

include "logica/conexion.php";

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">

$(function () { 
    

                
                
         $('#grafico').highcharts({ 
         chart: { type: 'column'},
         title: { text: 'Registros de Personal'},
         xAxis: { categories: ['Personal']},
         yAxis: { title: { text: 'Cantidad de personal' }},
         series: [
    { name: 'Cantidad de personal "Supervisor"', data: [

    <?php
      $sql = "SELECT COUNT(*) as cantidad FROM personal where Cargo = 'Supervisor';";

                $res = mysqli_query($conexion,$sql);
                
                

                while($data = mysqli_fetch_array($res)){
                    ?>
                    [ <?php echo $data['cantidad'];?> ],

                    <?php 
                }
                ?>

    ]}, 
    
    { name: 'Cantidad de personal "Vendedor"', data: [

     <?php
      $sql = "SELECT COUNT(*) as cantidad FROM personal where Cargo = 'Vendedor';";

                $res = mysqli_query($conexion,$sql);
                
                

                while($data = mysqli_fetch_array($res)){
                    ?>
                    [ <?php echo $data['cantidad'];?> ],

                    <?php 
                }
                ?>

    ]}
    
         ]
       });    
     });  


        </script>
    </head>
    <body>
<div id="grafico" style="width:80%; height:300px;"></div>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
<script src="Highcharts-4.1.5/js/modules/funnel.js"></script>



    </body>
</html>
