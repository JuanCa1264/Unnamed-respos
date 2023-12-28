<?php
include 'logica/plantillapdf.php';
	require 'logica/conexion.php';



	
	$actualYear = 2019;
	//SELECT YEAR(fecha_contratacion-1) FROM personal;//
	$query="select T1.ID,T1.Nombre_C,T2.Nombre_P,T2.Cargo,T2.Departamento from clientes T1 inner join personal T2 on T1.ID = T2.ID_P;";
	$resultado=$conexion->query($query);
	

	$pdf= new PDF('L','mm','A4');
	 
	//funcion para mostrar el total de paginas con una variable
	$pdf->AliasNbPages();
	$pdf->AddPage();
	//Encabezado
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,6,'ID DEL CLIENTE',1,0,'C',1);
	$pdf->Cell(60,6,'NOMBRE CLIENTE',1,0,'C',1);
	$pdf->Cell(80,6,'NOMBRE DEL PERSONAL QUE LO ATENDIO',1,0,'C',1);
	$pdf->Cell(50,6,'CARGO DEL PERSONAL',1,0,'C',1);
	$pdf->Cell(60,6,'DEPARTAMENTO DEL PERSONAL',1,1,'C',1);
	
	

	//Registro de la consulta
	$pdf->SetFont('Arial','',10);
	
	while($fila = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(30,6,($fila['ID']),1,0,'C');
		$pdf->Cell(60,6,($fila['Nombre_C']),1,0,'C');
		$pdf->Cell(80,6,$fila['Nombre_P'],1,0,'C');
		$pdf->Cell(50,6,($fila['Cargo']),1,0,'C');
		$pdf->Cell(60,6,($fila['Departamento']),1,1,'C');
		
		
		
	}
	$pdf->Output();
?>