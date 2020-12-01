<?php

    $id_producto = $_GET['ID_PRODUCTO'];
    $producto = $_GET['PRODUCTO'];
    $precio = $_GET['PRECIO'];
    $existencias = $_GET['EXISTENCIAS'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE Productos SET PRODUCTO='$producto', PRECIO='ID_$precio', EXISTENCIAS= '$existencias' WHERE ID_PRODUCTO='$id_producto';");
    header("Location: ../index.php");

?>