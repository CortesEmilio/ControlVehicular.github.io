<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CConductorE.css">
	<title>Modificar</title>
</head>
<body>
<div class="contenedor">
	<h1>Consulta de Conductores</h1>
	<div class="subCon">
		<?php
			$Criterio = $_POST['Criterio'];
			$Atributo = $_POST['Atributo'];

			include("Conecta.php");

			$Con = Conectar();
			$SQL = "SELECT * FROM conductores WHERE $Atributo = '$Criterio'";
			$Result = Consultar($Con, $SQL);
			//Procesamiento
			$n = mysqli_num_rows($Result);

			print "<table border 1>";
			print "<tr>";
				print "<td>"."IdConductor"."</td>";
				print "<td>"."Nombre"."</td>";
				print "<td>"."Direccion"."</td>";
				print "<td>"."Edad"."</td>";
				print "<td>"."Genero"."</td>";
				print "<td>"."Firma"."</td>";
				print "<td>"."Tipo de sangre"."</td>";
				print "<td>"."Foto"."</td>";
				print "<td>"."Fecha de nacimiento"."</td>";
				print "<td>"."RFC"."</td>";
				print "<td>"."CURP"."</td>";
				print "<td>"."Donador"."</td>";
			print "</tr>";

			for($a=0; $a<$n; $a++){
				$Fila = mysqli_fetch_row($Result);
				
				print "<tr>";
					print("<td>".$Fila[0]."</td>");
					print("<td>".$Fila[1]."</td>");
					print("<td>".$Fila[2]."</td>");
					print("<td>".$Fila[3]."</td>");
					print("<td>".$Fila[4]."</td>");
					print("<td>".$Fila[5]."</td>");
					print("<td>".$Fila[6]."</td>");
					print("<td>".$Fila[7]."</td>");
					print("<td>".$Fila[8]."</td>");
					print("<td>".$Fila[9]."</td>");
					print("<td>".$Fila[10]."</td>");
					print("<td>".$Fila[11]."</td>");
					//print("<td>"."<a href='DConductor.php?Conductor=$Fila[0]'>Eliminar</a>"."</td>");
					//print("<td>"."<a href='FUConductores.php?IdConductor=$Fila[0]&Nombre=$Fila[1]&Direccion=$Fila[2]&Edad=$Fila[3]&Genero=$Fila[4]&Firma=$Fila[5]&TipoDeSangre=$Fila[6]&Foto=$Fila[7]&FechaDeNac=$Fila[8]&RFC=$Fila[9]&CURP=$Fila[10]&Donador=$Fila[11]'>Actualizar</a>"."</td>");
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