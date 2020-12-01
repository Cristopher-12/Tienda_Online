<?php
    $db = new SQLite3("../tienda.db");
    $resultado = $db->query("SELECT * from TICKETS;");
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bootstrap.min.css">   
	<title>Historial de ventas</title>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID de ticket</th>
      <th scope="col">Fecha y hora</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">Cantidad de producto</th>
      <th scope="col">Total de prducto</th>
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