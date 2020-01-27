<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UConductores.php">
  <p>Datos de Conductores </p>
  <p>
    <label>IdConductor
    <input name="IdConductor" type="text" id="IdConductor" value="<?php print($_REQUEST['IdConductor']);?>" />
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
    <label>Edad
    <input name="Edad" type="text" id="Edad" value="<?php print($_REQUEST['Edad']);?>" />
    </label>
  </p>
  <p>
    <label>Genero
    <input type="text" name="Genero" id="Genero" value="<?php print($_REQUEST['Genero']);?>">
    </label>
  </p>
  <p>
    <label>Firma
    <input name="Firma" type="text" id="Firma" value="<?php print($_REQUEST['Firma']);?>" />
    </label>
  </p>
  <p>
    <label>TipoDeSangre
    <input name="TipoDeSangre" type="text" id="TipoDeSangre" maxlength="4" value="<?php print($_REQUEST['TipoDeSangre']);?>" />
    </label>
  </p>
  <p>
    <label>Foto
    <input name="Foto" type="text" id="Foto" value="<?php print($_REQUEST['Foto']);?>" />
    </label>
  </p>
  <p>
    <label>FechaDeNac
    <input name="FechaDeNac" type="text" id="FechaDeNac" maxlength="4" value="<?php print($_REQUEST['FechaDeNac']);?>" />
    </label>
</p>
  <p>
    <label>RFC
    <input name="RFC" type="text" id="RFC" maxlength="13" value="<?php print($_REQUEST['RFC']);?>" />
    </label>
  </p>
  <p>
    <label>CURP
    <input name="CURP" type="text" id="CURP" maxlength="18" value="<?php print($_REQUEST['CURP']);?>"/>
    </label>
  </p>
  <p>
    <label>Donador
    <br />
    <input type="text" name="Donador" value="<?php print($_REQUEST['Donador']);?>"  /></label>
    <br />
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
