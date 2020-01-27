<?php
	$Criterio = $_POST['Criterio'];
	$Atributo = $_POST['Atributo'];

	include("Conecta.php");

	$Con = Conectar();
	$SQL = "SELECT * FROM licencias WHERE $Atributo = '$Criterio'";
	$Result = Consultar($Con, $SQL);
	//Procesamiento
	$n = mysqli_num_rows($Result);

	print "<table border 1>";
	print "<tr>";
		print "<td>"."IdLicencia"."</td>";
		print "<td>"."Restriccion"."</td>";
		print "<td>"."Fecha de Exp"."</td>";
		print "<td>"."Antiguedad"."</td>";
		print "<td>"."Vigencia"."</td>";
		print "<td>"."Conductor"."</td>";
		print "<td>"."Lugar de Exp"."</td>";
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
			//print("<td>"."<a href='DLicencia.php?Licencia=$Fila[0]'>Eliminar</a>"."</td>");
			print("<td>"."<a href='FULicencias.php?IdLicencia=$Fila[0]&Restriccion=$Fila[1]&FechaDeExp=$Fila[2]&Antiguedad=$Fila[3]&Vigencia=$Fila[4]&Conductor=$Fila[5]&LugarDeExp=$Fila[6]'>Actualizar</a>"."</td>");
		print "</tr>";
		
	}
	print "</table>";
	//
	Cerrar($Con);
?>