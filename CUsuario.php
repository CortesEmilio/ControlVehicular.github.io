<?php
	$Criterio = $_POST['Criterio'];
	$Atributo = $_POST['Atributo'];

	include("Conecta.php");

	$Con = Conectar();
	$SQL = "SELECT * FROM usuario WHERE $Atributo = '$Criterio'";
	$Result = Consultar($Con, $SQL);
	//Procesamiento
	$n = mysqli_num_rows($Result);

	print "<table border 1>";
	print "<tr>";
		print "<td>"."Usuario"."</td>";
		print "<td>"."Contrasenia"."</td>";
		print "<td>"."Tipo"."</td>";
		print "<td>"."Estado"."</td>";
		print "<td>"."Intento"."</td>";
		print "<td>"."Bloqueado"."</td>";
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
			//print("<td>"."<a href='DUsuario.php?Usuario=$Fila[0]'>Eliminar</a>"."</td>");
			print("<td>"."<a href='FUUsuario.php?Usuario=$Fila[0]&Contrasenia=$Fila[1]&Tipo=$Fila[2]&Estado=$Fila[3]&Intento=$Fila[4]&Bloqueado=$Fila[5]'>Actualizar</a>"."</td>");
		print "</tr>";
		
	}
	print "</table>";
	//
	Cerrar($Con);
?>