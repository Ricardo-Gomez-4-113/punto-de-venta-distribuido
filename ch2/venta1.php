<?php
include "con.php";
$venta1 = $_POST["campo"];
sqlsrv_query($conn, "EXEC INSERTAR_VENTAS '$venta1'");
header('Location: form_ventas2.php');
exit;
?>