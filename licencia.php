<?php
	require 'fpdf\fpdf.php';
	require_once("phpqrcode/qrlib.php");

	//////////////////////////////////////////////
	include '..\Conecta.php';
	SESSION_START();
	$id = $_SESSION['id'];
	$Con = Conectar();
	$SQL = "SELECT L.IdLicencia, C.Nombre, C.FechaDeNac, L.FechaDeExp, L.Vigencia, L.Antiguedad, C.Direccion,
			C.TipoDeSangre, L.Restriccion, C.Donador
    		FROM Licencias L, Conductores C
    		WHERE L.Conductor = C.IdConductor
    		AND L.IdLicencia = $id";
    $Result=Consultar($Con,$SQL);
    $Fila=mysqli_fetch_row($Result);
	//////////////////////////////////////////////

	QRcode::png(" ID : $Fila[0], Nombre: $Fila[1],Nacimiento: $Fila[2], FechaDeExp: $Fila[3], Vigencia: $Fila[4],
	Antiguedad: $Fila[5],Direccion: $Fila[6],TipoDeSangre: $Fila[7],Restriccion: $Fila[8], Donador: $Fila[9]","test.png");

	$licencia = new FPDF();
	$SelloQro = 'SelloQro.jpg';

	$licencia->Addpage();

	$licencia->Image("test.png", 150, 20, 30, 30, "png");

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
	$licencia -> Cell(55,5,'Poder Ejecutivo del Estado de Queretaro',0,1,'L');

	//------------Secretaria de seguridad ciudadana------
	$licencia -> SetFont('Arial','B',8);
	$licencia -> SetY(33);
	$licencia -> SetX(70);
	$licencia -> Cell(55,5,'Secretaria de Seguridad Ciudadana',0,1,'L');
	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetX(70);
	$licencia -> Cell(55,7,'Licencia para conducir',0,1,'L');

	$licencia -> SetFont('Arial','B',8);
	$licencia -> SetY(120);
	$licencia -> SetX(80);
	$licencia -> Cell(25,5,'No. de Licencia',0,1,'R');

	$licencia -> SetFont('Arial','B',20);
	$licencia -> SetTextColor(194,8,8); //Cambiar a color rojo el texto
	$licencia -> SetY(129);
	$licencia -> SetX(60);
	$licencia -> Cell(45,10,$Fila[0],0,1,'R');


	$licencia -> SetFont('Arial','B',12);
	$licencia -> SetTextColor(0,0,0);
	$licencia -> SetY(145);
	$licencia -> SetX(68);
	$licencia -> Cell(37,8,'AUTOMOVILISTA',0,1,'R');

	//--------Foto de conductor----------
	$usuario = 'usuario.jpg';
	$licencia -> SetY(75);
	$licencia -> SetX(110);
	$licencia -> Cell(80,80,$licencia -> Image($usuario,$licencia -> GetX(),$licencia -> GetY(),80),0,1,'R');

	$licencia -> SetFont('Arial','',8);
	$licencia -> SetY(155);
	$licencia -> SetX(175);
	$licencia -> Cell(15,8,'NOMBRE',0,1,'R');

	$licencia -> SetFont('Arial','',25);
	$licencia -> SetY(163);
	$licencia -> SetX(115);
	$licencia -> MultiCell(75,10,$Fila[1],0,'R',0);
	/*$licencia -> Cell(75,10,'Apellido Paterno',0,1,'R');
	$licencia -> SetY(173);
	$licencia -> SetX(115);
	$licencia -> Cell(75,10,'Apellido Materno',0,1,'R');

	$licencia -> SetFont('Arial','B',35);
	$licencia -> SetY(185);
	$licencia -> SetX(115);
	$licencia -> Cell(75,10,'Nombres',0,1,'R');*/

	$licencia -> SetFont('Arial','',8);
	$licencia -> Cell(30,5,'Fecha de Nacimiento',0,1,'L');
	$licencia -> SetFont('Arial','',15);
	$licencia -> Cell(35,8,$Fila[2],0,1,'L');

	$licencia -> SetFont('Arial','',8);
	$licencia -> Cell(30,5,'Fecha de Expedicion',0,1,'L');
	$licencia -> SetFont('Arial','',15);
	$licencia -> Cell(35,8,$Fila[3],0,1,'L');

	$licencia -> SetFont('Arial','B',8);
	$licencia -> Cell(30,5,'Valido hasta',0,0,'L');

	$licencia -> SetX(90);
	$licencia -> Cell(10,5,'Firma',0,1,'L');

	$licencia -> SetFont('Arial','B',15);
	$licencia -> Cell(35,8,$Fila[4],0,1,'L');

	$licencia -> SetFont('Arial','B',8);
	$licencia -> Cell(30,5,'Antiguedad',0,1,'L');
	$licencia -> Cell(35,5,$Fila[5],0,1,'L');

	$firma = 'firma.jpg';
	$licencia -> SetY(208);
	$licencia -> SetX(80);
	$licencia -> Cell(30,20,$licencia->Image($firma,$licencia -> GetX(),$licencia -> GetY(),30),0,1,'R',false);

	$licencia -> Cell(20,5,'Tipo',0,1,'L');
	$licencia -> Cell(20,5,'A',0,1,'L');

	//////////////////////////////////////////Parte trasera////////////////////////////////////
	$licencia -> Addpage();

	$llamadaEmer = '911.jpg';
	$licencia -> Cell(40,30,$licencia->Image($llamadaEmer,$licencia -> GetX(),$licencia -> GetY(),40),0,0,'L',false);

	$llamadaAnon = '089.jpg';
	$licencia -> SetX(155);
	$licencia -> Cell(40,30,$licencia->Image($llamadaAnon,$licencia -> GetX(),$licencia -> GetY(),40),0,1,'R',false);

	$licencia -> SetFont('Arial','B',8);
	$licencia -> SetY(45);
	$licencia -> Setx(178);
	$licencia -> Cell(15,5,'Domicilio',0,1,'R');

	$licencia -> SetFont('Arial','',17);
	$licencia -> Setx(143);
	$licencia -> MultiCell(50,8,$Fila[6],0,'R',0);


	$coches = 'coches.jpg';
	$licencia -> SetY(100);
	$licencia -> SetX(15);
	$licencia -> Cell(183,27,$licencia->Image($coches,$licencia -> GetX(),$licencia -> GetY(),183),0,1,'C',false);

	$licencia -> SetFont('Arial','B',8);
	$licencia -> Cell(30,7,'Restricciones',0,0,'L');
	$licencia -> SetX(165);
	$licencia -> Cell(30,7,'Grupo Sanguineo',0,1,'R');

	$licencia -> SetFont('Arial','',12);
	$licencia -> Cell(35,10,$Fila[8],0,0,'L');
	$licencia -> SetX(185);
	$licencia -> Cell(10,10,$Fila[7],0,1,'R');

	$licencia -> SetFont('Arial','B',8);
	$licencia -> SetX(165);
	$licencia -> Cell(30,7,'Donador de Organos',0,1,'R');

	$licencia -> SetFont('Arial','',12);
	$licencia -> SetX(185);
	$licencia -> Cell(10,10,$Fila[9],0,1,'R');

	$licencia -> SetFont('Arial','B',8);
	$licencia -> SetX(160);
	$licencia -> Cell(35,7,'Numero de emergencia',0,1,'R');

	$licencia -> SetFont('Arial','',12);
	$licencia -> SetX(165);
	$licencia -> Cell(30,10,'442-482-15-68',0,1,'R');


		$licencia->Output('F', 'C:\xampp\htdocs\DAAD247528\Proyecto Final\Temp\Licencia.pdf');
	header( "refresh:2;url=XLicencias.php" );

?>
