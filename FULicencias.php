<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ULicencias.php">
  <p>Datos de Licencias </p>
  <p>
    <label>IdLicencia
    <input name="IdLicencia" type="text" id="IdLicencia" value="<?php print($_REQUEST['IdLicencia']);?>" />
    </label>
  </p>
  <p>
    <label>Restriccion</label>
  </p>
  <p>
    <label>
    <input name="Restriccion" type="text" id="Restriccion" value="<?php print($_REQUEST['Restriccion']);?>" />
    </label>
  </p>
  <p>
    <label>FechaDeExp
    <input name="FechaDeExp" type="date" id="FechaDeExp" value="<?php print($_REQUEST['FechaDeExp']);?>" />
    </label>
  </p>
  <p>
    <label>Antiguedad
    <input name="Antiguedad" type="text" id="Antiguedad" maxlength="3" value="<?php print($_REQUEST['Antiguedad']);?>" />
    </label>
  </p>
  <p>
    <label>Vigencia
    <input name="Vigencia" type="date" id="Vigencia" value="<?php print($_REQUEST['Vigencia']);?>" />
    </label>
</p>
  <p>
    <label>Conductor
    <input name="Conductor" type="text" id="Conductor" value="<?php print($_REQUEST['Conductor']);?>" />
    </label>
  </p>
  <p>
    <label>LugarDeExp
    <input name="LugarDeExp" type="text" id="LugarDeExp" value="<?php print($_REQUEST['LugarDeExp']);?>" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
</p>
  
</form>
</body>
</html>
