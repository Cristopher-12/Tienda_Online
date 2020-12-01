<?php

    $id_producto = $_GET["ID_PRODUCTO"];
    $producto = $_GET["PRODUCTO"];
    $precio = $_GET["PRECIO"];
    $existencias = $_GET["EXISTENCIAS"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from Productos where ID_PRODUCTO='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["ID_PRODUCTO"];
        $producto = $row["PRODUCTO"];
        $precio = $row["PRECIO"];
        $existencias = $row["EXISTENCIAS"];
    }

    $form = "
        <div class='form-group'>
            <label for='ID_PRODUCTO'>ID_PRODUCTO</label>
            <input type='text' readonly class='form-control' id='ID_PRODUCTO' name='ID_PRODUCTO' aria-describedby='ID_PRODUCTO' value='$id_producto'>
        </div>
        <div class='form-group'>
            <label for='PRODUCTO'>PRODUCTO</label>
            <input type='text' class='form-control' id='PRODUCTO' name='PRODUCTO' aria-describedby='PRODUCTO' value='$producto'>
        </div>
        <div class='form-group'>
            <label for='PRECIO'>PRECIO</label>
            <input type='text' class='form-control' id='PRECIO' name='PRECIO' aria-describedby='PRECIO' value='$precio'>
        </div>
        <div class='form-group'>
            <label for='EXISTENCIAS'>EXISTENCIAS</label>
            <input type='text' class='form-control' id='EXISTENCIAS' name='EXISTENCIAS' aria-describedby='EXISTENCIAS' value='$existencias'>
        </div>
        ";

    print($form);
?>