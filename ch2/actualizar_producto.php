<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Producto</title>
      <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/estilo.css" rel="stylesheet">
    <link href="assets/css/estilo2.css" rel="stylesheet">
</head>
<body>
<br>
<hr>
<div class="row"> 
    <div class="col-lg-4 col-lg-offset-4 col-xs-12">
        <form action="up_pro.php" method="POST" enctype="multipart/form-data" > 
             <center><table border="1">
            </center></table>
          <div class="form-group">
            <label for="text">Existencia:</label>
            <input type="text" class="form-control" name="existencia">
            <label for="text">Precio:</label>
            <input type="text" class="form-control" name="precio">
            <label for="text">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion">
            <br>
            <br>
            <select name="campo">
            <option value="" disabled="true">Seleccione un proveedor</option>
            <?php
            include("con.php");
            $result=sqlsrv_query($conn, "SELECT * FROM PROVEEDOR");
            while($dato=sqlsrv_fetch_array($result))
            {
            echo "<option value='".$dato['idPROVE']."'>".$dato['DESCRIPCION']."</option>";
            }
            ?>
            </select>
            <br>
            <br>
            <select name="campo2">
            <option value="" disabled="true">Seleccione un producto</option>
            <?php
            include("con.php");
            $result=sqlsrv_query($conn, "SELECT * FROM PRODUCTO");
            while($dato=sqlsrv_fetch_array($result))
            {
            echo "<option value='".$dato['idPRODUCTO']."'>".$dato['DESCRIPCION']."</option>";
            }
            ?>
            </select>
            <br>
            <br>
          <input type="submit" name="Actualizar" value="Actualizar">

        </form>
    </div>
</div>

</head>
<body>