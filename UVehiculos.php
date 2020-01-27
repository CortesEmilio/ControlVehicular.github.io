<?php
	include("Conecta.php");

	SESSION_START();

	$IdVehiculo= $_POST['IdVehiculo'];
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
	$Puerta= $_POST['Puerta'];
	$Transmision= $_POST['Transmision'];
	$Cilindraje= $_POST['Cilindraje'];
	$TipoDeCombustible= $_POST['TipoDeCombustible'];
	$Propietario= $_POST['Propietario'];


	$_SESSION["id"] = $IdVehiculo;

	$Con= Conectar();
	$SQL= "UPDATE Vehiculos SET NumSerie='$NumSerie', Placa='$Placa', Motor='$Motor', Factura='$Factura', Version='$Version',
		Anio='$Anio', Color='$Color', Modelo='$Modelo', Origen='$Origen',
		Tipo='$Tipo', Puerta='$Puerta', Transmision='$Transmision',
		Cilindraje='$Cilindraje', TipoDeCombustible='$TipoDeCombustible',
		Propietario='$Propietario' WHERE IdVehiculo='$IdVehiculo'";


	Consultar($Con,$SQL);


	Cerrar($Con);

	header("Location: ComprobanteVehiculos.php");
?>
