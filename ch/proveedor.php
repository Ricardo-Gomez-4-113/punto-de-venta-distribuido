<?php
include "con.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
sqlsrv_query($conn, "EXEC INSERTAR_PROVEEDOR '$nombre', '$descripcion'");
header('Location: index.php');
exit;
?>