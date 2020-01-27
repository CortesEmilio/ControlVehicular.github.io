<?php
	include("Conecta.php");


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
	$SQL= "INSERT INTO conductores(
	IdConductor,Firma,Nombre,Direccion,FechaDeNac,
	CURP,Genero,Edad,TipoDeSangre,Foto,RFC,Donador) 
	VALUES(null,'$Firma','$Nombre','$Direccion',
	'$FechaDeNac','$CURP','$Genero','$Edad','$TipoDeSangre','$Foto','$RFC','$Donador')";
	

	Consultar($Con,$SQL);

	Cerrar($Con);
?>