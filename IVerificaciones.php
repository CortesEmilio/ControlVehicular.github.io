<?php
	include("Conecta.php");

	
	$Tipo= $_POST['Tipo'];
	$Vigencia= $_POST['Vigencia'];
	$Dictamen= $_POST['Dictamen'];
	$Vehiculo= $_POST['Vehiculo'];
	
	$Con= Conectar();
	$SQL= "INSERT INTO verificaciones(Folio,Tipo,Vigencia,Dictamen,Vehiculo) 
	VALUES('','$Tipo','$Vigencia','$Dictamen','$Vehiculo')";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>