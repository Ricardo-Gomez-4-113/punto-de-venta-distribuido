<?php
include "con.php";
$id_pu = $_POST["campo"];
$rfc = $_POST["rfc"];
$nomina = $_POST["nomina"];
$nombre = $_POST["nombre"];
sqlsrv_query($conn, "EXEC INSERTAR_EMPLEADO '$id_pu', '$rfc', '$nomina', '$nombre'");
header('Location: index.php');
exit;
?>