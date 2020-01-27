<?php
	include("Conecta.php");

	$IdLicencia=$_POST['IdLicencia'];
	$Restriccion= $_POST['Restriccion'];
	$FechaDeExp= $_POST['FechaDeExp'];
	$Antiguedad= $_POST['Antiguedad'];
	$Vigencia= $_POST['Vigencia'];
	$Conductor= $_POST['Conductor'];
	$LugarDeExp= $_POST['LugarDeExp'];

	$Con= Conectar();
	$SQL= "UPDATE Licencias SET Restriccion='$Restriccion', 
		FechaDeExp='$FechaDeExp',Antiguedad='$Antiguedad',
		Vigencia='$Vigencia', Conductor='$Conductor',
		LugarDeExp= '$LugarDeExp'
		WHERE IdLicencia='$IdLicencia'";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>