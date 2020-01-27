<?php
	$Tenencia = $_REQUEST['Tenencia'];
	include("Conecta.php");
	$Con = Conectar();
	$SQL = "DELETE FROM tenencias WHERE IdTenencia=$Tenencia";
	Consultar($Con,$SQL);
	$Imp = mysqli_affected_rows($Con);
	$Error = mysqli_error($Con);

	if($Imp == -1){
		print("Existe un error" . "<br/>". "Error: ". $Error);

	}

	if($Imp == 1){
		print("Eliminacion correcta" . "<br />" . $Imp. " Registro Eliminado");

	}

	elseif($Imp == 0){
		print("No se encontro ningun registro" . "<br />" . $Imp. " Registro Eliminado");
	}
	//print($Imp);
	Cerrar($Con);
?>