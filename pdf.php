<?php
	require 'fpdf\fpdf.php'; //incluye libreria
	//$pdf = new FPDF('L','mm',array(100,50));
	$pdf = new FPDF();
	$imagen = 'imagen.jpg';
	
	$pdf -> Addpage();
	
	$pdf -> SetFont('Arial','B','15');//(tipo de letra, peso de letra, tamaño de letra)
	$pdf -> SetX(50);
	$pdf -> Cell(100,30,'Hola mundo',1,1,'C'); //(tamaño del cell horizontal,tamaño del cell vertical, texto introducido, borde(1/0), salto de linea(1/0), alineacion del texto) 
	$pdf -> Cell(100,10,'Hola mundo',1,0,'L');
	$pdf -> MultiCell(100,10,'Hola mundo asdhfalsdblkasbdajhsdkkshdfvbdzhvbfk',1,'L',0);
	$pdf -> Cell(100,10,$pdf->Image($imagen,$pdf->GetX(),$pdf->GetY(),100),1,1,'L',false);
	

	$pdf -> Output();
?>