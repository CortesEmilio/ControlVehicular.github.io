<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UTenencias.php">
  <p>Datos de Tenencias </p>
  <p>
    <label>IdTenencia
    <input name="IdTenencia" type="text" id="IdTenencia" value="<?php print($_REQUEST['IdTenencia']);?>"/>
    </label>
  </p>
  <p>
    <label>Monto
    <input name="Monto" type="text" id="Monto" value="<?php print($_REQUEST['Monto']);?>" />
    </label>
  </p>
  <p>
    <label>Anio
    <input name="Anio" type="text" id="Anio" maxlength="4" value="<?php print($_REQUEST['Anio']);?>" />
    </label>
  </p>
  <p>
    <label>Descuento
    <input type="text" name="Descuento" id="Descuento" value="<?php print($_REQUEST['Descuento']);?>" /> 
    </label>
  </p>
  <p>
    <label>Vehiculo
    <input name="Vehiculo" type="text" id="Vehiculo" value="<?php print($_REQUEST['Vehiculo']);?>" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
