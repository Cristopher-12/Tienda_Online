<?php
 $carrito = $_POST ['comment'];
 $total = $_POST ['totalCompra'];
 $pago = $_POST['pago'];
 $cambio =  $pago - $total;
 $idProductos = isset($_POST['idproductos']) ? $_POST['idproducto'] : '';
 $productoS= $_POST['producto'];
    
    include 'connect.php';  
    $db = new SQLite3("../tienda.db");
    

    $productos = explode(";",$idProductos);
    foreach ($producto as $producto) {
    $productoYCantidad = explode(":",$carrito);
    if(!isset($productoYCantidad[1]) || !isset($productoYCantidad[2])){
        continue;
    }
    $db->exec('UPDATE Productos SET EXISTENCIAS= EXISTENCIAS - '.$productoYCantidad[1].' WHERE ID_PRODUCTO="'.$productoYCantidad[2].'"');
    
    $db->exec("INSERT INTO Tickets (CANTIDAD_PRODUCTO,PRODUCTO,TOTAL_PRODUCTO) VALUES ('$productoYCantidad[1]', '$productoYCantidad[2]', '$total');");
   
		
		
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>
    <script type="text/javascript" src="carrito.js" charset="utf-8"></script>
    <title>Ticket de compra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
      <h1 class="stiloslabel1">Green Xpress</h1>
      <br>
      <h2>Ticket:</h2>
      <p>-----------------------------------------------------------</p>
      <p class="stiloslabel1">Tus compras son: <br><?php print("\n" . $carrito ."\n");?></p>
      <p>-----------------------------------------------------------</p>
      <p>Total a pagar : <?php print("$".$total);?></p>
      <p>Usted pago : <?php print("$".$pago);?></p>
      <p>CAMBIO : <?php print("$".$cambio);?></p>
      <p><?php echo "Fecha: ". date("d"). " del ". date("m"). " del ". date("Y") ;?></p>
      <p>-----------------------------------------------------------</p>
      <p class="stiloslabel1">Gracias por su compra, vuelva pronto.</p>
      <p>-----------------------------------------------------------</p>
      
    </div>
  </body>
</html>
