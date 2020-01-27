<?php
	$UsuarioF = $_POST['Usuario'];
	$AdministradorF = $_POST['Administrador'];
	$ContraseniaF =  $_POST['Contrasenia'];

	print($UsuarioF."<br>");
	print($AdministradorF."<br>");
	print($ContraseniaF."<br>");

	include("Conecta.php");
	$Con = Conectar();

	$SQL = "SELECT * FROM usuario WHERE Usuario = '$UsuarioF' OR Administrador = '$AdministradorF'";

	$Result=Consultar($Con,$SQL);

	$n = mysqli_num_rows($Result);

	$Fila = mysqli_fetch_row($Result); 
	
	print($n."<br>");

	//Validar usuario
	if($n==1){
		if ($ContraseniaF == $Fila[1]) {
			if ($Fila[3]==1) {
				if ($Fila[5]==0) {
					print("Acceso Correcto"."<br>");
					if($Fila[2]=='Usuario'){
						print("<a href=FUser.html>Usuario</a>");
					}
					elseif ($Fila[2]==''){
						print("<a href=FAdmin.html>Administrador</a>");
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