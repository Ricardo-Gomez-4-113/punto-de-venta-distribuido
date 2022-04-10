<?php
$serverName = "192.168.0.8"; //serverName\instanceName
$connectionInfo = array( "Database"=>"CHIDA", "UID"=>"admin", "PWD"=>"admin");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     
}else{
     echo "Fallo la conexion a la base de datos.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>