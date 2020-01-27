<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CMultaE.css">
	<title>Modificar</title>
</head>
<body>
	<div class="contenedor">
		<h1>Consulta de Multas</h1>
		<div class="subCon">
			<?php
				$Criterio = $_POST['Criterio'];
				$Atributo = $_POST['Atributo'];

				include("Conecta.php");

				$Con = Conectar();
				$SQL = "SELECT * FROM multas WHERE $Atributo = '$Criterio'";
				$Result = Consultar($Con, $SQL);
				//Procesamiento
				$n = mysqli_num_rows($Result);

				print "<table border 1>";
				print "<tr>";
					print "<td>"."IdMulta"."</td>";
					print "<td>"."Motivo"."</td>";
					print "<td>"."Agente"."</td>";
					print "<td>"."Fecha"."</td>";
					print "<td>"."Lugar"."</td>";
					print "<td>"."Descuento"."</td>";
					print "<td>"."Vehiculo"."</td>";
					print "<td>"."Licencia"."</td>";
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
						//print("<td>"."<a href='DMulta.php?Multa=$Fila[0]'>Eliminar</a>"."</td>");
						print("<td>"."<a href='FUMultas.php?IdMulta=$Fila[0]&Motivo=$Fila[1]&Agente=$Fila[2]&Fecha=$Fila[3]&Lugar=$Fila[4]&Descuento=$Fila[5]&Vehiculo=$Fila[6]&Licencia=$Fila[7]'>Actualizar</a>"."</td>");
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