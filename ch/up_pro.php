<?php
include "con.php";
$ex = $_POST["existencia"];
$pre = $_POST["precio"];
$des = $_POST["descripcion"];
$pro = $_POST["campo"];
$produ = $_POST["campo2"];
sqlsrv_query($conn, "EXEC UPDATE_PRODUCTO '$ex', '$pre', '$des', '$pro', '$produ'");
header('Location: index.php');
exit;
?>