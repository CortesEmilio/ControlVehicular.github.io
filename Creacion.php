<?php
////////////////////////////////////////////////////////////////////////////////
include '..\Conecta.php';
$Con = Conectar();

$xml = new DOMDocument('1.0', 'UTF-8');
$xml -> formatOutput = true;

$SQL =  'SELECT p.idPropietario, p.RFC, p.CURP, p.Nombre,
p.Direccion, p.Genero, p.FechaDeNac, p.Edad
 FROM propietarios p';

 $Result = Consultar($Con,$SQL);
 $Fila = mysqli_fetch_row($Result);
 $Contador = mysqli_num_rows($Result);

for ($i = 1; $i<$Contador + 1; $i++){
 $Fila = mysqli_fetch_row($Result);
  $libros = $xml->createElement("Propietarios");
  $xml-> appendChild($libros);

  $libro = $xml->createElement("Propietario");
  $libro-> setAttribute("id", $Fila[0]);
  $libros-> appendChild($libro);

  $RFC = $xml -> createElement("RFC", $Fila[1]);
  $libro->appendChild($RFC);
  $CURP = $xml -> createElement("CURP", $Fila[2]);
  $libro->appendChild($CURP);

  $Nombre = $xml -> createElement("Nombre", $Fila[3]);
  $libro->appendChild($Nombre);
  $Direccion = $xml -> createElement("Direccion", $Fila[4]);
  $libro->appendChild($Direccion);


  $FechaDeNac = $xml -> createElement("Fecha_De_Nacimiento", $Fila[5]);
  $libro->appendChild($FechaDeNac);
  $Edad = $xml -> createElement("Edad", $Fila[6]);
  $libro->appendChild($Edad);
}
echo "<xmp>" .$xml -> saveXML(). "</xmp>";

////////////////////////////////////////////////////////////////////////////
$xml->save("Reporte_libros.xml") or die ("Error al crear archivo XML");
 ?>
