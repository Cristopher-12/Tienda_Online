<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Insert</h1>
        <a href="index.php">Lista de productos</a>
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="ID_PRODUCTO">Id precio</label>
                <input type="text" class="form-control" id="ID_PRODUCTO" name="ID_PRODUCTO" aria-describedby="ID_PRODUCTO" placeholder="Ingresa el Id del Producto">
            <div class="form-group">
                <label for="PRODUCTO">Producto</label>
                <input type="text" class="form-control" id="PRODUCTO" name="PRODUCTO" aria-describedby="PRODUCTO" placeholder="Ingresa el Nombre del producto">
            </div>
            <div class="form-group">
                <label for="PRECIO">Precio</label>
                <input type="text" class="form-control" id="PRECIO" name="PRECIO" aria-describedby="PRECIO" placeholder="Ingresa el Precio">
            </div>
            <div class= "form-group">
            <label for="EXISTENCIAS">Existencias</label>
            <input type="text" class="form-control" id="EXISTENCIAS" name="EXISTENCIAS" aria-describedby="EXISTENCIAS" placeholder="Ingresa el Numero de existencias">
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</body>
</html>