<?php
	SESSION_START();
	require 'fpdf\fpdf.php';
	require_once("phpqrcode/qrlib.php");
  $id = $_SESSION['id'];
	//////////////////////////////////////////////
	include 'Conecta.php';
	$Con = Conectar();
	////////////////////////////////

	QRcode::png(" Id del Vehiculo Destruido : $id","test.png");

	$licencia = new FPDF();
	$SelloQro = 'SelloQro.jpg';

	$licencia->Addpage();

	$licencia -> SetFont('Arial','','8');
	//---------Imagen del sello de queretaro----------
	$licencia -> SetX(30);
	$licencia -> Cell(30,40,$licencia -> Image($SelloQro,$licencia -> GetX(),$licencia -> GetY(),30),0,0,'L',false);

	//---------Linea de division ---------------
	$licencia -> SetX(65);
	$licencia -> Cell(.1,40,'',1,0,'L');

	//-------------Estados unidos mexicanos-----------
	$licencia -> SetY(17);
	$licencia -> SetX(70);
	$licencia -> Cell(37,5,'Estados Unidos Mexicanos',0,1,'L');
	$licencia -> SetX(70);
	$licencia -> Cell(55,5,'Comprobante de baja de Vehiculo',0,1,'L');

	$licencia -> SetY(17);
	$licencia -> SetX(150);
	$licencia->Image("test.png", 150, 20, 30, 30, "png");

	//------------Secretaria de seguridad ciudadana------
	$licencia -> SetFont('Arial','B',8);
	$licencia -> SetY(33);
	$licencia -> SetX(70);
	$licencia -> Cell(55,5,'Secretaria Troyana',0,1,'L');
	$licencia -> SetFont('Arial','B',15);
	$licencia -> SetX(70);
	$licencia -> Cell(55,7,'Baja De Vehiculo',0,1,'L');

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetY(100);
	$licencia -> SetX(40);
	$licencia -> Cell(25,5,'Id del vehiculo:',0,1,'L');

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(194,8,8); //Cambiar a color rojo el texto
	$licencia -> SetY(98);
	$licencia -> SetX(70);
	$licencia -> Cell(10,10,$id,0,1,'R');



	//--------Foto de conductor----------


	//////////////////////////////////////////Parte trasera////////////////////////////////////

		$licencia->Output("F", 'C:\xampp\htdocs\DAAD247528\Proyecto Final\Temp\ReporteVehiculoDestruido.pdf');






?>
