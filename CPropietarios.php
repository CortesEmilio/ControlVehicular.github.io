<?php
	$Criterio = $_POST['Criterio'];
	$Atributo = $_POST['Atributo'];

	include("Conecta.php");

	$Con = Conectar();
	$SQL = "SELECT * FROM propietarios WHERE $Atributo = '$Criterio'";
	$Result = Consultar($Con, $SQL);
	//Procesamiento
	$n = mysqli_num_rows($Result);

	print "<table border 1>";
	print "<tr>";
		print "<td>"."IdPropietario"."</td>";
		print "<td>"."RFC"."</td>";
		print "<td>"."CURP"."</td>";
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
			//print("<td>"."<a href='DPropietario.php?Propietario=$Fila[0]'>Eliminar</a>"."</td>");
			print("<td>"."<a href='FUPropietarios.php?IdPropietario=$Fila[0]&RFC=$Fila[1]&CURP=$Fila[2]&Nombre=$Fila[3]&Direccion=$Fila[4]&Genero=$Fila[5]&FechaDeNac=$Fila[6]&Edad=$Fila[7]'>Actualizar</a>"."</td>");
		print "</tr>";
		
		//print($Fila[0]."---".$Fila[1]."---".
		//$Fila[2]."---".$Fila[3]."---".$Fila[4]."---".
		//$Fila[5]."---".$Fila[6]."---".$Fila[7]."<br>");
		
	}
	print "</table>";
	//
	Cerrar($Con);
?>