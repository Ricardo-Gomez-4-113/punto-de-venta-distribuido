<?php
include "con.php";
$del_pro = $_POST["campo"];
sqlsrv_query($conn, "EXEC BORRAR_PRODUCTO '$del_pro'");
header('Location: index.php');
exit;
?>