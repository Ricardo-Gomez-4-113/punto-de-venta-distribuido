<?php
include "con.php";
$del = $_POST["campo"];
sqlsrv_query($conn, "EXEC BORRAR_PROVEEDOR '$del'");
header('Location: index.php');
exit;
?>