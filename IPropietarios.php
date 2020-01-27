<?php
	include("Conecta.php");

	
	$RFC= $_POST['RFC'];
	$Nombre= $_POST['Nombre'];
	$Direccion= $_POST['Direccion'];
	$FechaDeNac= $_POST['FechaDeNac'];
	$CURP= $_POST['CURP'];
	$Genero= $_POST['Genero'];
	$Edad= $_POST['Edad'];

	$Con= Conectar();
	$SQL= "INSERT INTO propietarios(IdPropietario,RFC,Nombre,Direccion,FechaDeNac,CURP,Genero,Edad) VALUES('','$RFC','$Nombre','$Direccion','$FechaDeNac','$CURP','$Genero','$Edad')";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>