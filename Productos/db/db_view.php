<?php

    $id_persona = $_GET["id_persona"];

    $db = new SQLite3("../agenda.db");

    $resultado = $db->query("SELECT * from personas where id_persona='$id_persona';");

    while ($row = $resultado->fetchArray()) {
        $id_persona = $row["id_persona"];
        $nombre = $row["nombre"];
        $primer_apellido = $row["primer_apellido"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_persona'>ID</label>
            <input type='text' readonly class='form-control' id='id_persona' name='id_persona' aria-describedby='Id persona' value='$id_persona'>
        </div>
        <div class='form-group'>
            <label for='nombre'>Nombre</label>
            <input type='text' class='form-control' id='nombre' name='nombre' aria-describedby='nombre' value='$nombre'>
        </div>
        <div class='form-group'>
            <label for='primer_apellido'>Primer apellido</label>
            <input type='text' class='form-control' id='primer_apellido' name='primer_apellido' aria-describedby='primer_apellido' value='$primer_apellido'>
        </div>
        ";

    print($form);
?>