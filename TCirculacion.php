<?php
	require 'fpdf\fpdf.php';

	$TCirculacion = new FPDF();

	$TCirculacion -> Addpage('L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> Cell(30,5,'TIPO DE SERVICIO',1,0,'L');
	$TCirculacion -> SetX(90);
	$TCirculacion -> Cell(20,5,'HOLOGRAMA',1,0,'L');
	$TCirculacion -> SetX(140);
	$TCirculacion -> Cell(20,5,'FOLIO',1,0,'L');
	$TCirculacion -> SetX(190);
	$TCirculacion -> Cell(22,5,'VIGENCIA',1,0,'L');
	$TCirculacion -> SetX(240);
	$TCirculacion -> Cell(20,5,'PLACA',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> Cell(30,8,'PARTICULAR',1,0,'L');
	$TCirculacion -> SetX(90);
	$TCirculacion -> Cell(20,8,'',1,0,'L');
	$TCirculacion -> SetX(140);
	$TCirculacion -> Cell(20,8,'123456798',1,0,'L');
	$TCirculacion -> SetX(190);
	$TCirculacion -> Cell(22,8,'INDEFINIDA',1,0,'L');
	$TCirculacion -> SetFont('Arial','B','12');
	$TCirculacion -> SetX(240);
	$TCirculacion -> Cell(32,8,'ANIO/0000000*',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> Cell(30,5,'PROPIETARIO',1,0,'L');
	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> SetX(50);
	$TCirculacion -> Cell(120,10,'Apellido Materno Apellido Paterno Primer Nombre Segundo Nombre',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> SetY(50);
	$TCirculacion -> Cell(10,5,'RFC',1,0,'L');
	$TCirculacion -> SetX(90);
	$TCirculacion -> Cell(30,5,'NUMERO DE SERIE',1,0,'L');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(20,5,'MODELO',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> Cell(30,8,'*************',1,0,'L');
	$TCirculacion -> SetX(90);
	$TCirculacion -> Cell(30,8,'*****************',1,0,'L');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(10,8,'****',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> Cell(20,5,'LOCALIDAD',1,0,'L');
	$TCirculacion -> SetX(90);
	$TCirculacion -> Cell(35,5,'MARCA/LINEA/SUBLINEA',1,0,'L');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(20,5,'OPERACION',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> Cell(30,8,'*************',1,0,'L');
	$TCirculacion -> SetX(90);
	$TCirculacion -> Cell(30,8,'*****************',1,0,'L');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(10,8,'****',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(20,5,'FOLIO',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(10,8,'****',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> Cell(20,5,'MUNICIPIO',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> Cell(30,8,'*************',1,0,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(20,5,'PLACA ANT.',1,1,'L');

	$TCirculacion -> SetY(105);
	$TCirculacion -> MultiCell(40,5,'NUMERO DE CONSTANCIA DE INSCRIPCION (NCI)',1,'L',0);

	$TCirculacion -> SetY(105);
	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(23,5,'CILINDRAJE',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'C');

	$TCirculacion -> SetX(130);
	$TCirculacion -> Cell(25,5,'CVE VEHICULAR',1,0,'L');

	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(40,5,'FECHA DE EXPEDICION',1,1,'L');

	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(23,5,'CAPACIDAD',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'C');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> SetX(130);
	$TCirculacion -> Cell(25,5,'*******',1,0,'C');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(40,5,'**/**/**',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(23,5,'PUERTAS',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'C');

	$TCirculacion -> SetX(130);
	$TCirculacion -> Cell(15,5,'CLASE',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'L');

	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(45,5,'OFICINA EXPEDIDORA',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,1,'C');

	$TCirculacion -> Cell(15,5,'ORIGEN',1,0,'L');

	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(23,5,'ASIENTOS',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'C');

	$TCirculacion -> SetX(130);
	$TCirculacion -> Cell(15,5,'TIPO',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'L');

	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(23,5,'MOVIMIENTO',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> Cell(25,5,'IMPORTADO',1,0,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(23,5,'COMBUSTIBLE',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'C');

	$TCirculacion -> SetX(130);
	$TCirculacion -> Cell(15,5,'USO',1,0,'L');
	$TCirculacion -> Cell(5,5,'*',1,0,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(30,5,'ALTA DE PLACA',1,1,'L');

	$TCirculacion -> SetFont('Arial','','8');
	$TCirculacion -> Cell(15,5,'COLOR',1,0,'L');

	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(23,5,'TRANSMISION',1,0,'L');

	$TCirculacion -> SetX(130);
	$TCirculacion -> Cell(15,5,'RFA',1,0,'L');

	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(32,5,'NUMERO DE MOTOR',1,1,'L');

	$TCirculacion -> SetFont('Arial','','10');
	$TCirculacion -> Cell(30,5,'BLUE',1,0,'L');

	$TCirculacion -> SetX(80);
	$TCirculacion -> Cell(27,5,'AUTOMATICO',1,0,'L');

	$TCirculacion -> SetX(180);
	$TCirculacion -> Cell(32,5,'************',1,1,'C');

	///////////////////////////////////////////////////////////////////////////////////////////////

	$QroEnNos = 'QroEnNos.jpg';
	$SelloQro = 'PoderEjecutivoQro.jpg';

	
	$TCirculacion -> SetY(160);
	$TCirculacion -> SetX(48);
	$TCirculacion -> Cell(25,25,$TCirculacion -> Image($QroEnNos,$TCirculacion -> GetX(),$TCirculacion -> GetY(),25),1,0,'C',false);

	
	$TCirculacion -> SetY(160);
	$TCirculacion -> SetX(100);
	$TCirculacion -> Cell(28,28,$TCirculacion -> Image($SelloQro,$TCirculacion -> GetX(),$TCirculacion -> GetY(),30),1,0,'C',false);

	$TCirculacion -> SetFont('Arial','B','20');
	$TCirculacion -> SetX(130);
	$TCirculacion -> MultiCell(95,7,'PODER EJECUTIVO DEL ESTADO DE QUERETARO',1,'L',0);

	

	$TCirculacion -> Output();
?>