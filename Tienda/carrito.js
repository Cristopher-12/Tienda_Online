function agregar(){
	var cantidad1 = $ ("#cantidad1").val();
	var producto1 = $("#producto1 option:selected").text();
	var costo = $ ("#producto1").val();
	var carritocompras1 = $("#carritocompras1").val();
	var total1 = $("#total1").val();
	if (cantidad1<=10 & cantidad1>0){
		$("#carritocompras1").text(carritocompras1+"Numero de producto: "+cantidad1+" Producto: "
			+producto1+" Precio unitario: "+costo+" Total: "+parseFloat(costo)*parseFloat(cantidad1)
			+"\n");
		total_pago=parseFloat(cantidad1)*parseFloat(costo);
		var pago_actual =$ ("#total1").val();
	    var pago_final = parseFloat (total_pago)+parseFloat(pago_actual);
	    $("#total1").val(pago_final);
	}
}
function nueva(){
	$("#cantidad1").val("");
	$("#producto1").val("0");
	$("#total1").val('0');
	$("#carritocompras1").empty();
}