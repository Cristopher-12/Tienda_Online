<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Agenda</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Insert</h1>
        <a href="index.php">Lista de personas</a>
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Ingresa el nombre">
            </div>
            <div class="form-group">
                <label for="primer_apellido">Primer apellido</label>
                <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido" placeholder="Ingresa el primer apellido">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</body>
</html>