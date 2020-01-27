<?php
////////////////////////////////////////////////////////////////////////////////
SESSION_START();
include 'Conecta.php';
$id = $_SESSION['id'];
$Con = Conectar();
$xml = new DOMDocument('1.0', 'UTF-8');
$xml -> formatOutput = true;

$SQL = "SELECT* FROM licencias
      WHERE IdLicencia =  $id ";
 $Result = Consultar($Con,$SQL);
 $Contador = mysqli_num_rows($Result);

for ($i = 1; $i<$Contador + 1; $i++){
 $Fila = mysqli_fetch_row($Result);
  $libros = $xml->createElement("Licencias");
  $xml-> appendChild($libros);

  $libro = $xml->createElement("IdLicencia");
  $libro-> setAttribute("IdLicencia", $Fila[0]);
  $libros-> appendChild($libro);

  $RFC = $xml -> createElement("Restriccion", $Fila[1]);
  $libro->appendChild($RFC);
  $CURP = $xml -> createElement("FechaDeExp", $Fila[2]);
  $libro->appendChild($CURP);

  $Nombre = $xml -> createElement("Antiguedad", $Fila[3]);
  $libro->appendChild($Nombre);
  $Direccion = $xml -> createElement("Vigencia", $Fila[4]);
  $libro->appendChild($Direccion);

  $antiguedad = $xml -> createElement("Conductor", $Fila[5]);
  $libro->appendChild($Nombre);
  $Direccion = $xml -> createElement("LugarDeExp", $Fila[6]);
  $libro->appendChild($Direccion);
}
echo "<xmp>" .$xml -> saveXML(). "</xmp>";

////////////////////////////////////////////////////////////////////////////
$xml->save('C:\xampp\htdocs\DAAD247528\Proyecto Final\Temp\ComprobanteLicencias.XML') or die ("Error al crear archivo XML");
 ?>
