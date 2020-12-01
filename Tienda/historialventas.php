<?php
    $db = new SQLite3("../tienda.db");
    $resultado = $db->query("SELECT * from Tickets;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HISTORIAL DE VENTAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Historial ventas</h2>
  <p>VENTAS: </p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Ticket</th>
        <th>Fecha y hora</th>
        <th>Cantidad producto</th>
        <th>Productos</th>
        <th>Total producto</th>
      </tr>
    </thead>
    <tbody>
                     <?php 
                        
                        while ($row = $resultado->fetchArray())
                        {
                            
                        
                            {
                    ?>
                                <tr>
                                    <td><?php echo $row['ID_TICKET']?></td>
                                    <td><?php echo $row['FECHA_HORA']?></td>
                                    <td><?php echo $row['CANTIDAD_PRODUCTO']?></td>
                                    <td><?php echo $row['PRODUCTO']?></td>
                                    <td><?php echo $row['TOTAL_PRODUCTO']?></td>                                   
                                </tr> 
                     
		           
                    <?php
                            }
                        }
                       
                    ?> 
    </tbody>
  </table>
</div>

</body>
</html>
