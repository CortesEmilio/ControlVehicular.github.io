<?php
	require 'fpdf\fpdf.php';

	//////////////////////////////////////////////
	include '..\Conecta.php';
	$Con = Conectar();
	$SQL = "SELECT L.IdLicencia, C.Nombre, C.FechaDeNac, L.FechaDeExp, L.Vigencia, L.Antiguedad, C.Direccion, 
			C.TipoDeSangre, L.Restriccion, C.Donador
    		FROM Licencias L, Conductores C
    		WHERE L.Conductor = C.IdConductor
    		AND L.IdLicencia = 2";
    $Result=Consultar($Con,$SQL);
    $Fila=mysqli_fetch_row($Result);
	//////////////////////////////////////////////

	$pdf = new FPDF('P','mm',array(100,140));
	$pdf -> Addpage();
	$pdf -> Setfont('Arial','B',12);
	$pdf -> Cell(10,10,$Fila[1],0,1,'R');




	$pdf -> output();
?>