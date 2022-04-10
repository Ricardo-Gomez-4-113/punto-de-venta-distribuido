<?php
include "con.php";
$puesto = $_POST["puesto"];
echo $puesto;
sqlsrv_query($conn, "EXEC INSERTAR_PUESTO '$puesto'");
header('Location: index.php');
exit;
?>