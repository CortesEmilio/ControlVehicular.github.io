<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UMulta.php">
  <p>Datos de Multas </p>
  <p>
    <label>IdMulta
    <input name="IdMulta" type="text" id="IdMulta" value="<?php print($_REQUEST['IdMulta']);?>" />
    </label>
  </p>
  <p>
    <label>Motivo
    <input name="Motivo" type="text" id="Motivo" value="<?php print($_REQUEST['Motivo']);?>" />
    </label>
  </p>
  <p>
    <label>Agente
    <input name="Agente" type="text" id="Agente" value="<?php print($_REQUEST['Agente']);?>" />
    </label>
  </p>
  <p>
    <label>Fecha
    <input name="Fecha" type="date" id="Fecha" value="<?php print($_REQUEST['Fecha']);?>" />
    </label>
  </p>
  <p>
    <label>Lugar
    <input name="Lugar" type="text" id="Lugar" value="<?php print($_REQUEST['Lugar']);?>" />
    </label>
  </p>
  <p>
    <label>Descuento
    <input type="text" name="Descuento" id="Descuento" value="<?php print($_REQUEST['Descuento']);?>" />
    </label>
  </p>
  <p>
    <label>Vehiculo
    <input name="Vehiculo" type="text" id="Vehiculo" value="<?php print($_REQUEST['Vehiculo']);?>"/>
    </label>
  </p>
  <p>
    <label>Licencia
    <input type="text" name="Licencia" id="Licencia" value="<?php print($_REQUEST['Licencia']);?>">
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
  </p>
  <p>&nbsp; </p>
</form>
</body>
</html>
