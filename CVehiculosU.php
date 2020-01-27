<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CVehiculoE.css">
	<title>Modificar</title>
</head>
<body>
<div class="contenedor">
	<h1>Consulta de Vehiculos</h1>
	<div class="subCon">
		<?php
			$Criterio = $_POST['Criterio'];
			$Atributo = $_POST['Atributo'];

			include("Conecta.php");

			$Con = Conectar();
			$SQL = "SELECT * FROM vehiculos WHERE $Atributo = '$Criterio'";
			$Result = Consultar($Con, $SQL);
			//Procesamiento
			$n = mysqli_num_rows($Result);

			print "<table border 1>";
			print "<tr>";
				print "<td>"."IdVehiculo"."</td>";
				print "<td>"."NumSerie"."</td>";
				print "<td>"."Placa"."</td>";
				print "<td>"."Motor"."</td>";
				print "<td>"."Factura"."</td>";
				print "<td>"."Version"."</td>";
				print "<td>"."Anio"."</td>";
				print "<td>"."Color"."</td>";
				print "<td>"."Modelo"."</td>";
				print "<td>"."Origen"."</td>";
				print "<td>"."Tipo"."</td>";
				print "<td>"."Puerta"."</td>";
				print "<td>"."Transmision"."</td>";
				print "<td>"."Cilindraje"."</td>";
				print "<td>"."Tipo de combustible"."</td>";
				print "<td>"."Propietario"."</td>";
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
					print("<td>".$Fila[12]."</td>");
					print("<td>".$Fila[13]."</td>");
					print("<td>".$Fila[14]."</td>");
					print("<td>".$Fila[15]."</td>");
					//print("<td>"."<a href='DVehiculo.php?Vehiculo=$Fila[0]'>Eliminar</a>"."</td>");
					//print("<td>"."<a href='FUVehiculos.php?IdVehiculo=$Fila[0]&NumSerie=$Fila[1]&Placa=$Fila[2]&Motor=$Fila[3]&Factura=$Fila[4]&Version=$Fila[5]&Anio=$Fila[6]&Color=$Fila[7]&Modelo=$Fila[8]&Origen=$Fila[9]&Tipo=$Fila[10]&Puerta=$Fila[11]&Transmision=$Fila[12]&Cilindraje=$Fila[13]&TipoDeCombustible=$Fila[14]&Propietario=$Fila[15]'>Actualizar</a>"."</td>");
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