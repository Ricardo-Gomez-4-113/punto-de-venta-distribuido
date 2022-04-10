<?php
include "con.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$id = $_POST["campo"];
sqlsrv_query($conn, "EXEC UPDATE_PROVEEDOR '$nombre', '$descripcion', '$id'");
header('Location: index.php');
exit;
?>