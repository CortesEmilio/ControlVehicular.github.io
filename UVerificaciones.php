<?php
	include("Conecta.php");

	$Folio= $_POST['Folio'];
	$Tipo= $_POST['Tipo'];
	$Vigencia= $_POST['Vigencia'];
	$Dictamen= $_POST['Dictamen'];
	$Vehiculo= $_POST['Vehiculo'];
	
	$Con= Conectar();
	$SQL= "UPDATE Verificaciones SET Tipo='$Tipo', Vigencia='$Vigencia',
		Dictamen='$Dictamen', Vehiculo='$Vehiculo'
		WHERE Folio = '$Folio'";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>