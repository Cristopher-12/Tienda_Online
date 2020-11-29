<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script type="text/javascript" src="carrito.js"></script>
	 <link rel="stylesheet" type="text/css" href="bulma.css">
	<title>Carrio de compras</title>
</head>
<body>
  <form action="ticket.php" method="GET" target="_blank">
    <div class="container">
      <div class="colums">
        <div class="colums is-4">
          <h1 class="title is-1">Papeleria Jh</h1>
          <label class="label">Cantidad</label>
          <input type="number" name="cantidad_1" id="cantidad1" class="input" min="1" max="10">
          <p class="help">Minimo un producto</p>
          <label class="label">Productos</label>
          <div class="select is-primary">
            <select class="select" name="producto_1" id="producto1">
                          <option>-Selecciona un producto-</option>
                          <option value="100">Audifono Bluethoo sencillo $100.00</option>
                          <option value="35">Cable v8 blindado $35.00</option>
                          <option value="190">Audifono Bluethoo Airpod $190.00</option>
                          <option value="17">Auxiliar 50 cm $17.00</option>
                          <option value="25">Auxiliar 1.5 mts $25.00</option>
                          <option value="10">Cable v8 Samsumg $10.00</option>
                          <option value="17">Audifono Samsumg J5 $17.00</option>
                          <option value="55">Cargador generico universal $55.00</option>
                      </select>
          </div>
          <br>
          <button class="button is-primary" onclick="agregar()" id="agregar1" name="agregar_1">Agregar</button>
          <br>
          <p class="help">Si desea hacer una nueva compra oprima el siguiente boton</p>
          <button class="button is-primary" onclick="nueva()" id="nuevo1" name="nuevo_1">Nueva Compra</button>
          <label class="label">Carrito de compras</label>
          <textarea class="textarea" name="carritocompras_1" id="carritocompras1"></textarea>
          <label class="label">Total</label>
          <input type="number" name="total_1" id="total1" class="input" value="0" readonly>
          <label class="label">Pago</label>
          <input type="number" name="pago_1" id="pago1" class="input" min="1">
          <button type="submit" class="button is-secundary">Cobrar</button>
        </div>
      </div>
    </div>
  </form>
</body>
</html>

"NOTA"