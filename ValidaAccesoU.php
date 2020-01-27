<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="UserEstilo.css">
	<title>
		Usuario
	</title>
</head>
<body>
<div class="contenedor">
	<?php
		$UsuarioF = $_POST['Usuario'];
		$ContraseniaF =  $_POST['Contrasenia'];

		//print($UsuarioF."<br>");
		//print($ContraseniaF."<br>");

		include("Conecta.php");
		$Con = Conectar();

		$SQL = "SELECT * FROM usuario WHERE Usuario = '$UsuarioF'";

		$Result=Consultar($Con,$SQL);

		$n = mysqli_num_rows($Result);

		$Fila = mysqli_fetch_row($Result); 
		
		//print($n."<br>");

		//Validar usuario
		if($n==1){
			if ($ContraseniaF == $Fila[1]) {
				if ($Fila[3]==1) {
					if ($Fila[5]==0) {
						//print("Acceso Correcto"."<br>");
						if($Fila[2]=='Usuario'){
							print(
									"<h1>Acceso Correcto<br>Solo puede consultar informacion de las entidades</h1>"."<br>"
								);
							print("<br>"."<a id='Modificar' href='UserConsultar.html'>Consulta</a>");
							//print("<a href=FUser.html>Usuario</a>");
						}
						else{
							print("Acceso Incorrecto");
						}
					}
					else{
						print("Acceso Incorrecto: Usuario Bloqueado");
					}
				}
				else{
					print("Acceso Incorrecto: Usuario Inactivo");
				}
				
			}
			else{
				print("Acceso Incorrecto: Contrasenia Incorrecta");
				$SQL = "UPDATE usuario SET Intento=Intento+1 WHERE Usuario='$UsuarioF'";
				Consultar($Con,$SQL);

				if($Fila[4]==2){
					$SQL = "UPDATE usuario SET Bloqueado=1 WHERE Usuario='$UsuarioF'";
					Consultar($Con,$SQL);

				}
			}
		} 
		else{
			print("Acceso Incorrecto: Usuario No Existe");
		}
	?>
</div>
</body>
</html>