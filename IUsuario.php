<?php
	include("Conecta.php");

	$Usuario= $_GET['Usuario'];
	$Contrasenia= $_GET['Contrasenia'];
	$Tipo= $_GET['Tipo'];
	$Estado= $_GET['Estado'];
	$Intento= $_GET['Intento'];
	$Bloqueado= $_GET['Bloqueado'];
	
	$Con= Conectar();
	$SQL= "INSERT INTO usuario 
	VALUES('$Usuario','$Contrasenia','$Tipo','$Estado','$Intento','$Bloqueado')";
	Consultar($Con,$SQL);

	Cerrar($Con);
?>