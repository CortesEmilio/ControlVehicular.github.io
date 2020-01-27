<?php
	include("Conecta.php");

	$Monto= $_REQUEST['Monto'];
	$Anio= $_REQUEST['Anio'];
	$Descuento= $_REQUEST['Descuento'];
	$Vehiculo= $_REQUEST['Vehiculo'];

	$Con= Conectar();
	$SQL= "INSERT INTO tenencias 
	VALUES('','$Monto','$Anio','$Descuento','$Vehiculo')";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>