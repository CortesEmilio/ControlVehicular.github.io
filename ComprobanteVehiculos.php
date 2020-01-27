<?php
	SESSION_START();
	require 'fpdf\fpdf.php';
	require_once("phpqrcode/qrlib.php");
  $id = $_SESSION['id'];
	//////////////////////////////////////////////
	include 'Conecta.php';
	$Con = Conectar();
	$SQL = "SELECT* FROM vehiculos
    		WHERE IdVehiculo =  $id ";

    $Result=Consultar($Con,$SQL);
    $Fila=mysqli_fetch_row($Result);
	//////////////////////////////////////////////

	QRcode::png(" IdVehiculo : $Fila[0], Numero De Serie: $Fila[1], Placa: $Fila[2], Motor: $Fila[3], Factura: $Fila[4],
	Version: $Fila[5], Anio: $Fila[6], Color: $Fila[7], Modelo : $Fila[8], Origen: $Fila[9], Tipo: $Fila[10],
	 Puerta: $Fila[11], Transmision: $Fila[12], Cilindraje: $Fila[13],
	 TipoDeCombustible: $Fila[14], Propietario: $Fila[15]","test.png");

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
	$licencia -> Cell(55,5,'Comprobante de Vehiculo',0,1,'L');

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
	$licencia -> Cell(55,7,'Comprobante De Vehiculo',0,1,'L');

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetY(100);
	$licencia -> SetX(40);
	$licencia -> Cell(25,5,'Id del vehiculo:',0,1,'L');

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(194,8,8); //Cambiar a color rojo el texto
	$licencia -> SetY(98);
	$licencia -> SetX(70);
	$licencia -> Cell(10,10,$Fila[0],0,1,'R');



	//--------Foto de conductor----------

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(110);
	$licencia -> SetX(40);
	$licencia -> Cell(15,8,'Numero de serie:',0,1,'L');

	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(105);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[1],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(120);
	$licencia -> SetX(40);
	$licencia -> Cell(15,8,'Placa:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(115);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[2],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(130);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Motor:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(125);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[3],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(140);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Factura:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(135);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[4],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(150);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Version:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(145);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[5],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(160);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Anio:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(155);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[6],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(170);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Color:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(165);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[7],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(180);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Modelo:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(175);
	$licencia -> SetX(75);
	$licencia -> MultiCell(25,25,$Fila[8],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(190);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Origen:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(190);
	$licencia -> SetX(75);
	$licencia -> MultiCell(25,25,$Fila[9],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(100);
	$licencia -> SetX(110);
	$licencia -> Cell(15,8,'Tipo:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(95);
	$licencia -> SetX(120);
	$licencia -> MultiCell(20,20,$Fila[10],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(110);
	$licencia -> SetX(110);
	$licencia -> Cell(15,8,'Puertas:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(105);
	$licencia -> SetX(120);
	$licencia -> MultiCell(20,20,$Fila[11],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(120);
	$licencia -> SetX(115);
	$licencia -> Cell(15,8,'Transmision:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(115);
	$licencia -> SetX(120);
	$licencia -> MultiCell(20,20,$Fila[12],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(130);
	$licencia -> SetX(115);
	$licencia -> Cell(15,8,'Cilindraje:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(125);
	$licencia -> SetX(120);
	$licencia -> MultiCell(20,20,$Fila[13],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(140);
	$licencia -> SetX(135);
	$licencia -> Cell(15,8,'Tipo De combustible:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(135);
	$licencia -> SetX(150);
	$licencia -> MultiCell(20,20,$Fila[14],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(150);
	$licencia -> SetX(115);
	$licencia -> Cell(15,8,'Propietario:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(145);
	$licencia -> SetX(120);
	$licencia -> MultiCell(20,20,$Fila[15],0,'R',0);
	//////////////////////////////////////////Pate trasera////////////////////////////////////

		$licencia->Output('F', 'C:\xampp\htdocs\DAAD247528\Proyecto Final\Temp\ComprobanteVehiculo.pdf');
		header( "refresh:2;url=XVehiculos.php" );




?>
