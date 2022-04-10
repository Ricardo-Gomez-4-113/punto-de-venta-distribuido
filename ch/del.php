<?php
include "con.php";
$del = $_POST["campo"];
sqlsrv_query($conn, "EXEC BORRAR_PUESTO '$del'");
header('Location: index.php');
exit;
?>