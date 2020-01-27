<?php
	include("Conecta.php");

	$IdTenencia= $_REQUEST['IdTenencia'];
	$Monto= $_REQUEST['Monto'];
	$Anio= $_REQUEST['Anio'];
	$Descuento= $_REQUEST['Descuento'];
	$Vehiculo= $_REQUEST['Vehiculo'];

	$Con= Conectar();
	$SQL= "UPDATE Tenencias SET Monto='$Monto', Anio='$Anio',
		Descuento='$Descuento',Vehiculo='$Vehiculo'
		WHERE IdTenencia='$IdTenencia'";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>