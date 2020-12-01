<?php
    $id_producto = $_GET['ID_PRODUCTO'];
    $producto = $_GET['PRODUCTO'];
    $precio = $_GET['PRECIO'];
    $existencias = $_GET['EXISTENCIAS'];
    
    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO Productos (ID_PRODUCTO,PRODUCTO,PRECIO,EXISTENCIAS) VALUES ('$id_producto', '$producto', '$precio', '$existencias');");
   
    header("Location: ../index.php");

?>

<?php
    $nombre = $_GET['nombre'];
    $precio_venta = $_GET['precio_venta'];
    $existencias = $_GET['existencias'];
    $descripcion = $_GET['descripcion'];

    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO producto (nombre,precio_venta,existencias,descripcion) VALUES ('$nombre', '$precio_venta', '$existencias', '$descripcion');");
    
    header("Location: ../index.php");

?>
