<?php
	include("Conecta.php");

	SESSION_START();

	$IdLicencia = $_POST['IdLicencia'];
	$Restriccion= $_POST['Restriccion'];
	$FechaDeExp= $_POST['FechaDeExp'];
	$Antiguedad= $_POST['Antiguedad'];
	$Vigencia= $_POST['Vigencia'];
	$Conductor= $_POST['Conductor'];
	$LugarDeExp= $_POST['LugarDeExp'];

	$_SESSION['id'] = $IdLicencia;

	$Con= Conectar();
	$SQL= "INSERT INTO licencias(IdLicencia,Restriccion,FechaDeExp,Antiguedad,Vigencia,Conductor,LugarDeExp)
	VALUES('$IdLicencia','$Restriccion','$FechaDeExp','$Antiguedad','$Vigencia',
	'$Conductor','$LugarDeExp')";
	Consultar($Con,$SQL);

	Cerrar($Con);

	header("Location: licencia.php");

?>
