<?php
	$Criterio = $_POST['Criterio'];

	include("Conecta.php");

	$Con = Conectar();
	$SQL = "SELECT FROM propietarios WHERE propietarios = '$Criterio'";
	$Result = Consultar($Con, $SQL);
	//Procesamiento
	$n = mysqli_num_rows($Result);

	print "<table border 1>";
	print "<tr>";
		print "<td>"."IdPropietario"."</td>";
		print "<td>"."RFC"."</td>";
		print "<td>"."Curp"."</td>";
		print "<td>"."Nombre"."</td>";
		print "<td>"."Direccion"."</td>";
		print "<td>"."Genero"."</td>";
		print "<td>"."FechaDeNac"."</td>";
		print "<td>"."Edad"."</td>";
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
		print "</tr>";
		
	}
	print "</table>";
	//
	Cerrar($Con);
?>