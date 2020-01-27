<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="get" action="UUsuario.php">
  <p>Datos de Usuario </p>
  <p>
    <label>Usuario
    <input name="Usuario" type="text" id="Usuario" value="<?php print($_REQUEST['Usuario']);?>" />
    </label>
  </p>
  <p>
    <label>Contrasenia
    <input name="Contrasenia" type="password" id="Contrasenia" value="<?php print($_REQUEST['Contrasenia']);?>" />
    </label>
  </p>
  <p>
    <label>Tipo
    <input name="Tipo" type="text" id="Tipo" value="<?php print($_REQUEST['Tipo']);?>" />
    </label>
  </p>
  <p>
    <label>Estado
    <input name="Estado" type="text" id="Estado" value="<?php print($_REQUEST['Estado']);?>" />
    </label>
  </p>
  <p>
    <label>Intento
    <input name="Intento" type="text" id="Intento" value="<?php print($_REQUEST['Intento']);?>" />
    </label>
  </p>
  <p>
    <label>Bloqueado
    <input name="Bloqueado" type="text" id="Bloqueado" value="<?php print($_REQUEST['Bloqueado']);?>" />
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
