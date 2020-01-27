<?php
	include("Conecta.php");

	$IdConductor=$_POST['IdConductor'];
	$Firma= $_POST['Firma'];
	$Nombre= $_POST['Nombre'];
	$Direccion= $_POST['Direccion'];
	$FechaDeNac= $_POST['FechaDeNac'];
	$CURP= $_POST['CURP'];
	$Genero= $_POST['Genero'];
	$Edad= $_POST['Edad'];
	$TipoDeSangre= $_POST['TipoDeSangre'];
	$Foto= $_POST['Foto'];
	$RFC= $_POST['RFC'];
	$Donador= $_POST['Donador'];

	$Con= Conectar();
	$SQL= "UPDATE Conductores SET Firma='$Firma', Nombre='$Nombre',
		Direccion='$Direccion',FechaDeNac='$FechaDeNac', CURP='$CURP',
		Genero= '$Genero', Edad='$Edad', TipoDeSangre='$TipoDeSangre',
		Foto='$Foto', RFC='$RFC', Donador='$Donador'
		WHERE IdConductor='$IdConductor'";
	

	Consultar($Con,$SQL);

	Cerrar($Con);
?>