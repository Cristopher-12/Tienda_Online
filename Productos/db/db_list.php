<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from Productos;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID_PRODUCTO</th>
                <th>PRODUCTO</th>
                <th>PRECIO</th>
                <th>EXISTENCIAS</th>

            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        
        $id_producto = $row['ID_PRODUCTO'];
        $producto = $row['PRODUCTO'];
        $precio = $row['PRECIO'];

        $table = "
            <tr>
                <td>$id_producto</td>
                <td>$producto</td>
                <td>$precio</td>
                <td><a href='view.php?ID_PRODUCTO=$id_producto'>View</a></td>
                <td><a href='update.php?ID_PRODUCTO=$id_producto'>Update</a></td>
                <td><a href='delete.php?ID_PRODUCTO=$id_producto'>Delete</a></td>
            </tr>
        ";

        print($table);



    }
 
    print("</table>");
?>