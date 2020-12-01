function insertar(){
  var cantidad= $("#cantidad_product").val();
  var nombreProducto = $("#producto option:selected").text();
  var precio=$("#producto").val();
  var carrito = $("#comment").val();
  var total=0;
  
  if(cantidad<10 & cantidad >0 &  precio >0){
    $("#comment").text(carrito + cantidad + nombreProducto +  "\tPrecio:$" + precio + "\tTotal:$"+ parseFloat(cantidad)*parseFloat(precio)+"\n");
    llenaTotal(parseFloat(cantidad)* parseFloat(precio));
    $("#cantidad_product").val(" ")
    $("#producto").val("0")
  }
  

  else if (cantidad>0 & cantidad>=10 & precio>0){
  }

  else if (precio>0 & cantidad<=0 || precio<=0 & cantidad>0 ){
  }
}

function limpiar(){
  $("#comment").empty();
  $("#cantidad_product").val(" ");
  $("#totalCompra").val('0');
  $("#producto").val("0");
  $("#pago").val(" ")
}


function llenaTotal(costo){
  var totalActual = $("#totalCompra").val();
  var totalFinal = parseFloat(totalActual)+parseFloat(costo);
  $("#totalCompra").val(totalFinal);
}

function validateForm() {
  var x = document.forms["tienda"]["pago"].value;
  var pago = $("#pago").val()
  if (x == "") {
    return false;
    }

  else if (pago<=0){
  }
}