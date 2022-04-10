<?php
include "con.php";
$puesto = $_POST["puesto"];
$up = $_POST["campo"];
sqlsrv_query($conn, "EXEC UPDATE_PUESTO '$puesto','$up'");
header('Location: index.php');
exit;
?>