<?php

    $id_persona = $_GET['id_persona'];
    $nombre = $_GET['nombre'];
    $primer_apellido = $_GET['primer_apellido'];

    $db = new SQLite3('../../agenda.db');
    $db->exec("UPDATE personas SET nombre='$nombre', primer_apellido='$primer_apellido' WHERE id_persona='$id_persona';");
    header("Location: ../index.php");

?>