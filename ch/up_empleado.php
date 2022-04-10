<?php
include "con.php";
$id_pu = $_POST["campo"];
$id = $_POST["campo2"];
$rfc = $_POST["rfc"];
$nomina = $_POST["nomina"];
$nombre = $_POST["nombre"];
sqlsrv_query($conn, "EXEC UPDATE_EMPLEADO '$id_pu', '$rfc', '$nomina', '$nombre', '$id'");
header('Location: index.php');
exit;
?>