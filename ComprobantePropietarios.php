<?php
SESSION_START();
	require 'fpdf\fpdf.php';
	require_once("phpqrcode/qrlib.php");

	//////////////////////////////////////////////
	include '..\Conecta.php';



	$id = $_SESSION['id'];

	$Con = Conectar();
	$SQL = "SELECT* FROM propietarios
    		WHERE IdPropietario = $id";

    $Result=Consultar($Con,$SQL);
    $Fila=mysqli_fetch_row($Result);
	//////////////////////////////////////////////

	QRcode::png(" IdPropietario : $Fila[0], RFC: $Fila[1], CURP: $Fila[2], Nombre: $Fila[3], Direccion: $Fila[4],
	Genero: $Fila[5], FechaDeNac: $Fila[6], Edad: $Fila[7]","test.png");

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
	$licencia -> Cell(55,5,'Comprobante de Propietario',0,1,'L');

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
	$licencia -> Cell(55,7,'Comprobante De Propietario',0,1,'L');

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetY(100);
	$licencia -> SetX(40);
	$licencia -> Cell(25,5,'Id Propietario:',0,1,'L');

	$licencia -> SetFont('Arial','',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(98);
	$licencia -> SetX(85);
	$licencia -> Cell(10,10,$Fila[0],0,1,'R');



	//--------Foto de conductor----------

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(110);
	$licencia -> SetX(40);
	$licencia -> Cell(15,8,'RFC:',0,1,'L');

	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(105);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[1],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(120);
	$licencia -> SetX(40);
	$licencia -> Cell(15,8,'CURP:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(115);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[2],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(130);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Nombre:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(125);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[3],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(140);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Direccion:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(130);
	$licencia -> SetX(75);
	$licencia -> MultiCell(30,30,$Fila[4],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(150);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Genero:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(140);
	$licencia -> SetX(75);
	$licencia -> MultiCell(30,30,$Fila[5],0,'R',0);

	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(160);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'FechaDeNac:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(150);
	$licencia -> SetX(75);
	$licencia -> MultiCell(30,30,$Fila[6],0,'R',0);


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0); //Cambiar a color rojo el texto
	$licencia -> SetY(170);
	$licencia -> SetX(45);
	$licencia -> Cell(15,8,'Edad:',0,1,'R');
	$licencia -> SetFont('Arial','',12);
	$licencia -> SetY(165);
	$licencia -> SetX(75);
	$licencia -> MultiCell(20,20,$Fila[7],0,'R',0);


	//////////////////////////////////////////Parte trasera////////////////////////////////////


	$licencia->Output("F", 'C:\xampp\htdocs\DAAD247528\Proyecto Final\Temp\Repo.pdf');


	?>
