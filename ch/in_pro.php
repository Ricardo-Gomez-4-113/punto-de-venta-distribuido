<?php
include "con.php";
$ex = $_POST["existencia"];
$pre = $_POST["precio"];
$des = $_POST["descripcion"];
$pro = $_POST["campo"];
sqlsrv_query($conn, "EXEC INSERTAR_PRODUCTO '$ex', '$pre', '$des', '$pro'");
header('Location: index.php');
exit;
?>