<?php
	include("Conecta.php");

	$Usuario= $_GET['Usuario'];
	$Contrasenia= $_GET['Contrasenia'];
	$Tipo= $_GET['Tipo'];
	$Estado= $_GET['Estado'];
	$Intento= $_GET['Intento'];
	$Bloqueado= $_GET['Bloqueado'];
	
	$SQL= "UPDATE usuario SET Contrasenia='$Contrasenia', 
		Tipo='$Tipo', Estado='$Estado',
		Intento='$Intento', Bloqueado='$Bloqueado'
		WHERE Usuario='$Usuario'";



	$Con= Conectar();

	Consultar($Con,$SQL);

	Cerrar($Con);
?>