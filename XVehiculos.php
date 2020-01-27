<?php
////////////////////////////////////////////////////////////////////////////////
SESSION_START();
include 'Conecta.php';
$id = $_SESSION['id'];
$Con = Conectar();
$xml = new DOMDocument('1.0', 'UTF-8');
$xml -> formatOutput = true;

$SQL = "SELECT* FROM vehiculos
      WHERE IdVehiculo =  $id ";
 $Result = Consultar($Con,$SQL);
 $Contador = mysqli_num_rows($Result);

for ($i = 1; $i<$Contador + 1; $i++){
 $Fila = mysqli_fetch_row($Result);
  $libros = $xml->createElement("Vehiculos");
  $xml-> appendChild($libros);
  $libro = $xml->createElement("IdVehiculo");
  $libro-> setAttribute("IdVehiculo", $Fila[0]);
  $libros-> appendChild($libro);

  $RFC = $xml -> createElement("NumSerie", $Fila[1]);
  $libro->appendChild($RFC);
  $CURP = $xml -> createElement("Placa", $Fila[2]);
  $libro->appendChild($CURP);

  $Nombre = $xml -> createElement("Motor", $Fila[3]);
  $libro->appendChild($Nombre);
  $Direccion = $xml -> createElement("Factura", $Fila[4]);
  $libro->appendChild($Direccion);
  $Version = $xml->createElement("Version", $Fila[5]);
  $libro->appendChild($Version);

  $Anio = $xml->createElement("Anio", $Fila[6]);
  $libro->appendChild($Anio);

  $Color = $xml->createElement("Color", $Fila[7]);
  $libro->appendChild($Color);


  $Modelo = $xml->createElement("Modelo", $Fila[8]);
  $libro->appendChild($Modelo);

  $Origen = $xml->createElement("Origen", $Fila[9]);
  $libro->appendChild($Origen);

  $Tipo = $xml->createElement("Tipo", $Fila[10]);
  $libro->appendChild($Tipo);


  $Puerta = $xml->createElement("Puerta", $Fila[11]);
  $libro->appendChild($Puerta);

  $Transmision = $xml->createElement("Transmision", $Fila[12]);
  $libro->appendChild($Transmision);

  $Cilindraje = $xml->createElement("Cilindraje", $Fila[13]);
  $libro->appendChild($Cilindraje);
  $TipoDeCombustible = $xml->createElement("TipoDeCombustible", $Fila[14]);
  $libro->appendChild($TipoDeCombustible);
  $Propietario = $xml->createElement("Propietario", $Fila[15]);
  $libro->appendChild($Propietario);




}
echo "<xmp>" .$xml -> saveXML(). "</xmp>";

////////////////////////////////////////////////////////////////////////////
$xml->save('C:\xampp\htdocs\DAAD247528\Proyecto Final\Temp\ComprobanteVehiculo.XML') or die ("Error al crear archivo XML");
 ?>
