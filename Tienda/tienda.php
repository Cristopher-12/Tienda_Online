<!DOCTYPE html>
<html lang="es">
  <head>
    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <title>TIENDA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2 style="color: yellow" onclick="changeColor(this.parentNode)">TIENDA DONDE LAS MEJORES MARCAS A EXCELENTES PRECIOS</h2>
      <form method="POST" action="ticket.php" target="_blank">
        <select name="productos" class="custom-select mb-3" id="producto">
          <option selected>PRODUCTOS DISPONIBLES</option>
          <option value="25">JABON DOVE 100 g</option>
          <option value="9">LATA CHILES LA COSTEÑA 25 g</option>
          <option value="15">SALVO ARRANCA GRASA 1/2 l</option>
          <option value="5">TRIDENT 9 PASTILLAS</option>
          <option value="3">SAZONADOR 2 g RIKO POLLO</option>
          <option value="19">JABON ZOTE 22 g </option>
          <option value="9">JUGO MAGI 12 g</option>
          <option value="38">PAQUETE SOPAS MODERNA 69 g</option>
        </select>  
        <label for="cant">CANTIDAD QUE NECESITAS:</label>
        <input type="number" class="form-control" id="cantidad" placeholder=" CANTIDA QUE NECESITAS" name="cantidad">
        <br><h2>CARRITO</h2><br>
        <textarea class="form-control" rows="5" id="texta" name="texta" ></textarea>
        <br>
        <br>
        <label for="total">TOTAL:</label>
        <input type="text" value="0" id="total" name="total">
        <br>
        <br>
        <button type="button" class="btn btn-primary btn-lg" onclick="limpiar()">NUEVA COMPRA</button>
        <button type="button" class="btn btn-primary btn-lg" onclick="insertar()">INSERTAR</button> 
        <br>
        <label for="pago">PAGO:</label>
        <input type="number" class="form-control" id="pago" placeholder="INGRESA LA CANTIDAD DE PAGO" name="pago">
        <br>
        <input type="submit" class="btn btn-info" value="PAGAR">
<body style="background-color:rgb(208, 65, 39);">
</body>
  </form>
</div>
</body>
</html> 