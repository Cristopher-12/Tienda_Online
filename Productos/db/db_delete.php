<?php
    $id_producto = $_GET["ID_PRODUCTO"];

    $db = new SQLite3("../../tienda.db");

    $db->exec("DELETE FROM Productos where ID_PRODUCTOS='$id_producto';");

    header("Location: ../index.php");
?>