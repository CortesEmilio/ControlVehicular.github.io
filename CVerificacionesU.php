<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CVerificacionE.css">
	<title>Modificar</title>
</head>
<body>
<div class="contenedor">
	<h1>Consulta de Verificaciones</h1>
	<div class="subCon">
		<?php
			$Criterio = $_POST['Criterio'];
			$Atributo = $_POST['Atributo'];

			include("Conecta.php");

			$Con = Conectar();
			$SQL = "SELECT * FROM verificaciones WHERE $Atributo = '$Criterio'";
			$Result = Consultar($Con, $SQL);
			//Procesamiento
			$n = mysqli_num_rows($Result);

			print "<table border 1>";
			print "<tr>";
				print "<td>"."Folio"."</td>";
				print "<td>"."Tipo"."</td>";
				print "<td>"."Vigencia"."</td>";
				print "<td>"."Dictamen"."</td>";
				print "<td>"."Vehiculo"."</td>";
			print "</tr>";

			for($a=0; $a<$n; $a++){
				$Fila = mysqli_fetch_row($Result);
				
				print "<tr>";
					print("<td>".$Fila[0]."</td>");
					print("<td>".$Fila[1]."</td>");
					print("<td>".$Fila[2]."</td>");
					print("<td>".$Fila[3]."</td>");
					print("<td>".$Fila[4]."</td>");
					//print("<td>"."<a href='DVerificacion.php?Verificacion=$Fila[0]'>Eliminar</a>"."</td>");
					//print("<td>"."<a href='FUVerificaciones.php?Folio=$Fila[0]&Tipo=$Fila[1]&Vigencia=$Fila[2]&Dictamen=$Fila[3]&Vehiculo=$Fila[4]'>Actualizar</a>"."</td>");
				print "</tr>";
				
			}
			print "</table>";
			//
			Cerrar($Con);
		?>
	</div>
</div>
</body>
</html>