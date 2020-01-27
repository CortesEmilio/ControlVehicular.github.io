<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UVerificaciones.php">
  <p>Datos de Verificaciones </p>
  <p>
    <label>Folio
    <input name="Folio" type="text" id="Folio" value="<?php print($_REQUEST['Folio']);?>"/>
    </label>
  </p>
  <p>
    <label>Tipo
    <input name="Tipo" type="text" id="Tipo" value="<?php print($_REQUEST['Tipo']);?>"/>
    </label>
  </p>
  <p>
    <label>Vigencia
    <input name="Vigencia" type="date" id="Vigencia" value="<?php print($_REQUEST['Vigencia']);?>"/>
    </label>
  </p>
  <p>
    <label>Dictamen
    <input name="Dictamen" type="text" id="Dictamen" value="<?php print($_REQUEST['Dictamen']);?>"/>
    </label>
</p>
  <p>
    <label>Vehiculo
    <input name="Vehiculo" type="text" id="Vehiculo" value="<?php print($_REQUEST['Vehiculo']);?>"/>
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
