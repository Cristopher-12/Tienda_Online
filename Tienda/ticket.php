<?php
$texta = $_POST['texta'];
$total = $_POST['total'];
$pago = $_POST['pago'];
$cambio = $pago - $total;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <title>MI TIENDA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
     <h1>MI TIENDA</h1>
     <h2>TICKET</h2>
     <p class="stiloslabel3">TUS COMPRAS: <br><?php print("\n" . $texta ."\n");?></p>
     <p>TOTAL:<?php print($total);?></p>
     <p>CAMBIO:<?php print($cambio);?></p>
     <p><?php echo "FECHA: ". date("d")." del ". date("m"). " del ".date ("Y") ;?></p>
     <p>****************MUCHAS GRACIAS POR SU COMPRA******************</p>
    </div>
  </body>
</html>