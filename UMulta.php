<?php
	include("Conecta.php");

	$IdMulta= $_POST['IdMulta'];
	$Motivo= $_POST['Motivo'];
	$Agente= $_POST['Agente'];
	$Fecha= $_POST['Fecha'];
	$Lugar= $_POST['Lugar'];
	$Descuento= $_POST['Descuento'];
	$Vehiculo= $_POST['Vehiculo'];
	$Licencia= $_POST['Licencia'];

	$Con= Conectar();
	$SQL= "UPDATE Multas SET Motivo='$Motivo', Agente='$Agente',
		Fecha='$Fecha',Lugar='$Lugar', Descuento='$Descuento',
		Vehiculo= '$Vehiculo', Licencia='$Licencia'
		WHERE IdMulta='$IdMulta'";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>