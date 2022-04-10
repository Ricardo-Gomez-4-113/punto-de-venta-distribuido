<?php
include "con.php";
$venta2 = $_POST["campo"];
$cantidad = $_POST["cantidad"];
$result=sqlsrv_query($conn, "SELECT MAX(idVENTAS) as id FROM VENTAS");
while($dato=sqlsrv_fetch_array($result))
{
$id_1 = $dato['id'];
}
$result2=sqlsrv_query($conn, "SELECT PRECIO FROM PRODUCTO WHERE idPRODUCTO=$venta2");
while($dato2=sqlsrv_fetch_array($result2))
{
$id_2 = $dato2['PRECIO'];
}
$result3=sqlsrv_query($conn, "SELECT EXISTENCIA FROM PRODUCTO WHERE idPRODUCTO=$venta2");
while($dato3=sqlsrv_fetch_array($result3))
{
$id_3 = $dato3['EXISTENCIA'];
}
$exist = $id_3 - $cantidad;
sqlsrv_query($conn, "UPDATE PRODUCTO SET EXISTENCIA='$exist' WHERE idPRODUCTO=$venta2");
sqlsrv_query($conn, "EXEC INSERTAR_DETALLE_VENTAS '$id_1', '$venta2', '$id_2', '$cantidad'");
header('Location: index.php');
exit;
?>