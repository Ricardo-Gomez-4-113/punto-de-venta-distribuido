<?php
include "con.php";
$del = $_POST["campo"];
sqlsrv_query($conn, "DELETE DETALLE_VENTAS FROM DETALLE_VENTAS WHERE idEMPLEADO = '$del'");
sqlsrv_query($conn, "DELETE VENTAS FROM VENTAS WHERE idEMPLEADO = '$del'");
sqlsrv_query($conn, "EXEC BORRAR_EMPLEADO '$del'");
header('Location: index.php');
exit;
?>