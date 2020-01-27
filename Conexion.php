<?php
	$Con = mysqli_connect("127.0.0.1","root","","controlvehicular201922");
	//print_r($Con);

	$SQL= "INSERT INTO propietarios VALUES('2','2','2','2','2','2','2','2')";
	$Query= mysqli_query($Con,$SQL) or die (mysqli_error($Con));
	//print($Query);

	$Cerrar= mysqli_close($Con);
	print($Cerrar);

?>

