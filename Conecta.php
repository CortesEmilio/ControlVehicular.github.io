<?php
	function Conectar(){
		$ServerName= "localhost";
		$UserName= "root";
		$Password= "";
		$DataBase= "controlvehicular201922";
		$Con= mysqli_connect($ServerName,$UserName,$Password,$DataBase);
		return $Con;
	}

	function Consultar($Con,$SQL){
		$Query= mysqli_query($Con,$SQL) or die(mysqli_error($Con));
		return $Query;
	}

	function Cerrar($Con){
		mysqli_close($Con);
	}

?>
