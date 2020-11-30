<?php
    $producto = $_GET['PRODUCTO'];
    $precio = $_GET['PRECIO'];
    $existencias = $_GET['EXISTENCIAS'];
    
    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO Productos (PRODUCTO,PRECIO) VALUES ('$producto', '$precio');");
   
    header("Location: ../index.php");

?>
