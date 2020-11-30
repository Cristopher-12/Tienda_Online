<?php
    $db = new SQLite3("../agenda.db");

    $resultado = $db->query("SELECT * from Productos;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID_PRODUCTO</th>
                <th>PRODUCTO</th>
                <th>PRECIO</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $id_persona = $row['ID_PRODUCTO'];
        $nombre = $row['PRODUCTO'];
        $primer_apellido = $row['primer_apellido'];

        $table = "
            <tr>
                <td>$id_persona</td>
                <td>$nombre</td>
                <td>$primer_apellido</td>
                <td><a href='view.php?id_persona=$id_persona'>View</a></td>
                <td><a href='update.php?id_persona=$id_persona'>Update</a></td>
                <td><a href='delete.php?id_persona=$id_persona'>Delete</a></td>
            </tr>
        ";

        print($table);


/*
        //Forma 2 para mostrar los datos
        print("<tr>");
        print("<td>".$row['id_persona']."</td>");
        print("<td>".$row['nombre']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("<td><a href='view.php?id_persona=".$row['id_persona']."'>View</a></td>");
        print("<td><a href='update.php?id_persona=".$row['id_persona']."'>Update</a></td>");
        print("<td><a href='delete.php?id_persona=".$row['id_persona']."'>Delete</a></td>");
        print("</tr>");
        */
    }
 
    print("</table>");
?>