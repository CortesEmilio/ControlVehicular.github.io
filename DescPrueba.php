<?php
header("Content-disposition: attachment; filename=Licencia.pdf");
header("Content-type: application/pdf");
readfile("sample.pdf");

header("Content-disposition: attachment; filename=Reporte_Libros.XML");
header("Content-type: application/XML");
readfile("sample.XML");
?>
