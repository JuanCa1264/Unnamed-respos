<?php

require 'fpdf/fpdf.php';

class PDF extends fpdf{
	function Header(){
		//función de la clase FPDF 
		//tamaño x, y t
		$this->Image('img/logo1.png', 5, 10, 30);
		//título al encabezado
		//formato de texto

		$this->SetFont('Arial','B',15);
		//espacio para no sobreponer imagen

		$this->Cell(30);
		//creación de celda sin contorno ni salto de linea y centrado
		$this->Cell(200,10,'Reporte de cliente-personal',1,0,'C');
		//salto de linea
		$this->Ln(30);
	}

	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		//número de páginas que genera pdf 0 para centrar

		$this->Cell(0,10,'Página'.$this->PageNo().'-{nb}',0,0,'C');
	}

}

?>