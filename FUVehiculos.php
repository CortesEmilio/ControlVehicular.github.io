<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UVehiculos.php">
  <p>Datos de Vehiculos </p>
  <p>
    <label>IdVehiculo
    <input name="IdVehiculo" type="text" id="IdVehiculo" value="<?php print($_REQUEST['IdVehiculo']);?>"/>
    </label>
  </p>
  <p>
    <label>NumSerie
    <input name="NumSerie" type="text" id="NumSerie" value="<?php print($_REQUEST['NumSerie']);?>"/>
    </label>
</p>
  <p>
    <label>Placa
    <input name="Placa" type="text" id="Placa" maxlength="7" value="<?php print($_REQUEST['Placa']);?>"/>
    </label>
  </p>
  <p>
    <label>Motor
    <input name="Motor" type="text" id="Motor" value="<?php print($_REQUEST['Motor']);?>"/>
    </label>
  </p>
  <p>
    <label>Factura
    <input name="Factura" type="text" id="Factura" maxlength="19" value="<?php print($_REQUEST['Factura']);?>"/>
    </label>
  </p>
  <p>
    <label>Version
    <input name="Version" type="text" id="Version" value="<?php print($_REQUEST['Version']);?>"/>
    </label>
  </p>
  <p>
    <label>Anio
    <input name="Anio" type="text" id="Anio" maxlength="4" value="<?php print($_REQUEST['Anio']);?>"/>
    </label>
  </p>
  <p>
    <label>Color
    <input name="Color" type="text" id="Color" value="<?php print($_REQUEST['Color']);?>"/>
    </label>
  </p>
  <p>
    <label>Modelo
    <input name="Modelo" type="text" id="Modelo" value="<?php print($_REQUEST['Modelo']);?>"/>
    </label>
  </p>
  <p>
    <label>Origen
    <input name="Origen" type="text" id="Origen" value="<?php print($_REQUEST['Origen']);?>"/>
    </label>
  </p>
  <p>
    <label>Tipo
    <input name="Tipo" type="text" id="Tipo" value="<?php print($_REQUEST['Tipo']);?>"/>
    </label>
  </p>
  <p>
    <label>Puerta
    <input name="Puerta" type="text" id="Puerta" maxlength="1" value="<?php print($_REQUEST['Puerta']);?>"/>
    </label>
  </p>
  <p>
    <label>Transmision
    <input name="Transmision" type="text" id="Transmision" value="<?php print($_REQUEST['Transmision']);?>"/>
    </label>
  </p>
  <p>
    <label>Cilindraje
    <input name="Cilindraje" type="text" id="Cilindraje" value="<?php print($_REQUEST['Cilindraje']);?>"/>
    </label>
  </p>
  <p>
    <label>TipoDeCombustible
    <input name="TipoDeCombustible" type="text" id="TipoDeCombustible" value="<?php print($_REQUEST['TipoDeCombustible']);?>"/>
    </label>
  </p>
  <p>
    <label>Propietario
    <input name="Propietario" type="text" id="Propietario" value="<?php print($_REQUEST['Propietario']);?>"/>
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
