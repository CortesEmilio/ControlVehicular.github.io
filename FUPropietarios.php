<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UPropietarios.php">
  <label>Datos de Propietarios <br />
  <br />
  IdPropietario
  <input name="IdPropietario" type="text" id="IdPropietario" value="<?php print($_REQUEST['IdPropietario']);?>" />
  </label>
  <p>
    <label>RFC
    <input name="RFC" type="text" id="RFC" maxlength="13" value="<?php print($_REQUEST['RFC']);?>" />
    </label>
  </p>
  <p>
    <label>CURP
    <input name="CURP" type="text" id="CURP" maxlength="18" value="<?php print($_REQUEST['CURP']);?>" />
    </label>
  </p>
  <p>
    <label>Nombre
    <input name="Nombre" type="text" id="Nombre" value="<?php print($_REQUEST['Nombre']);?>" />
    </label>
</p>
  <p>
    <label>Direccion
    <input name="Direccion" type="text" id="Direccion" value="<?php print($_REQUEST['Direccion']);?>" />
    </label>
  </p>
  <p>
    <label>Genero
    <input type="text" name="Genero" id="Genero" value="<?php print($_REQUEST['Genero']);?>">
    </label>
  </p>
  <p>
    <label>FechaDeNac
    <input name="FechaDeNac" type="date" id="FechaDeNac" value="<?php print($_REQUEST['FechaDeNac']);?>" />
    </label>
  </p>
  <p>
    <label>Edad
    <input name="Edad" type="text" id="Edad" value="<?php print($_REQUEST['Edad']);?>"/>
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
