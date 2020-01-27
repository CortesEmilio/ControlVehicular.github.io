<?php
	include("Conecta.php");

	SESSION_START();


	$IdVehiculo = $_POST['IdVehiculo'];
	$NumSerie= $_POST['NumSerie'];
	$Placa= $_POST['Placa'];
	$Motor= $_POST['Motor'];
	$Factura= $_POST['Factura'];
	$Version= $_POST['Version'];
	$Anio= $_POST['Anio'];
	$Color= $_POST['Color'];
	$Modelo= $_POST['Modelo'];
	$Origen= $_POST['Origen'];
	$Tipo= $_POST['Tipo'];
	$Puertas= $_POST['Puertas'];
	$Transmision= $_POST['Transmision'];
	$Cilindraje= $_POST['Cilindraje'];
	$TipoDeCombustible= $_POST['TipoDeCombustible'];
	$Propietario= $_POST['Propietario'];
	$_SESSION['id'] = $IdVehiculo;


	$Con= Conectar();
	$SQL= "INSERT INTO vehiculos
	VALUES('$IdVehiculo','$NumSerie','$Placa','$Motor','$Factura','$Version','$Anio','$Color',
	'$Modelo','$Origen','$Tipo','$Puertas','$Transmision','$Cilindraje',
	'$TipoDeCombustible','$Propietario')";
	Consultar($Con,$SQL);

	Cerrar($Con);
	header("Location: ComprobanteVehiculos.php");

?>
