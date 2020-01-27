<?php
	$Usuario = $_POST['Usuario'];
	include("Conecta.php");
	$Con = Conectar();
	$SQL = "DELETE FROM usuario WHERE Usuario='$Usuario'";
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



