<?php
	include("Conecta.php");
SESSION_START();

$IdMulta = $_POST['IdMulta'];
	$Motivo= $_POST['Motivo'];
	$Agente= $_POST['Agente'];
	$Fecha= $_POST['Fecha'];
	$Lugar= $_POST['Lugar'];
	$Descuento= $_POST['Descuento'];
	$Vehiculo= $_POST['Vehiculo'];
	$Licencia= $_POST['Licencia'];
	$_SESSION['id'] = $IdMulta;

	$Con= Conectar();
	$SQL= "INSERT INTO multas
	VALUES('$IdMulta','$Motivo','$Agente','$Fecha','$Lugar',
	'$Descuento','$Vehiculo','$Licencia')";
	Consultar($Con,$SQL);

	Cerrar($Con);

		header("Location: ComprobanteMultas.php");
?>
