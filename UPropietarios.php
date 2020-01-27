<?php
	include("Conecta.php");
	SESSION_START();

	$IdPropietario= $_POST['IdPropietario'];
	$RFC= $_POST['RFC'];
	$Nombre= $_POST['Nombre'];
	$Direccion= $_POST['Direccion'];
	$FechaDeNac= $_POST['FechaDeNac'];
	$CURP= $_POST['CURP'];
	$Genero= $_POST['Genero'];
	$Edad= $_POST['Edad'];

	$_SESSION["id"] = $IdPropietario;

	$Con= Conectar();
	$SQL= "UPDATE Propietarios SET RFC='$RFC', Nombre='$Nombre',
		Direccion='$Direccion',FechaDeNac='$FechaDeNac', CURP='$CURP',
		Genero= '$Genero', Edad='$Edad'
		WHERE IdPropietario='$IdPropietario'";
	Consultar($Con,$SQL);

	Cerrar($Con);
	header("Location: ComprobantePropietarios.php");

?>
