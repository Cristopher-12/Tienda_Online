<!DOCTYPE html>
<html lang="es">
  <head>

    <link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>
    <script type="text/javascript" src="carrito.js" charset="utf-8"></script>
    <title>GREEN XPRESS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="stiloslabel">Green Xpress</h1>
      <form method="POST" action="ticket.php" target="_blank" name="tienda" >
        <h1>Punto de venta Tulancingo</h1>
        <div class="form-group">
          <label for="sel1">Lista de productos (selecciona uno):</label>
          <select class="form-control" id="producto" name="producto">
            <option value="0" selected>Selecciona un producto</option>
            <option value="1286">Galon Aloe sabor mango </option>
            <option value="620">Polvo para malteada sabor Coco</option>
            <option value="428">Caja de Barritas sabor Chocolate</option>
            <option value="563">CR7 Drive</option>
            <option value="1200">Proteina Strength</option>
            <option value="1320">Herbalife Formula 1</option>
            <option value="800">Gel corporal de Aloe</option>
            <option value="300" >Te verde sabor granada</option>
          </select>
        
          <label for="cantidad">Cantidad</label>
          <input type="number" class="form-control" id="cantidad_product" placeholder="Selecciona minimo un producto" name="cantidad">
          <br>
          <input type="button" id="insert" class="btn btn-primary" onclick="insertar()"  value="Insertar"> 
          <br>
          
          <br>
          <input type="button" id ="compra" class="btn btn-primary" onclick="limpiar()" value="Nueva compra"> 
          <br>
          
          <br>      
          <h1>Carrito de compras</h1>
          <textarea class="form-control" rows="5" id="comment" name="comment" ></textarea>
          <br>
          <label for="totalCompra">Total:</label>
          <input type="text" value="0" id="totalCompra" name="totalCompra" class="campodeshabilitado">
          <br>
          <label for="cantidad">Pago:</label>
          <input type="number" class="form-control" id="pago" placeholder="Cantidad con la que se pagara" name="pago">
          <br>
          <input type="submit" class="btn btn-primary" value="Pagar" onclick="validateForm()">
        </div>
      </form>        
    </div>
  </body>
</html>