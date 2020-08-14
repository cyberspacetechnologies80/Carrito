var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.producto').find('.subtotal').text((precio*cantidad));
				$.post('./js/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text(e);
				});
			}
		}
	});
	$(".eliminar").click(function(e){
		e.preventDefault();
		
		var id=$(this).attr('data-id');
		var subtotal=parseFloat($(this).parentsUntil('.producto').find('.subtotal').text());
		var total=parseFloat($("#total").text());
		
		var total2=(total-subtotal);
		$("#total").text(total2);
		$(this).parentsUntil('.producto').remove();
		$.post('./js/eliminar.php',{
			Id:id
		},function(a){
			
			if(a=='0'){
				location.href="./carritodecompras.php";
			}
		});

	});
	$("#formulario").submit(function(evento){
		//alert("se omitio el evento");
		$.get('./compras/compras.php',function(e){
			
		}).fail(function (){
			evento.preventDefault();
			alert("La tarea ha fallado");	
		});
	});
}	
$(document).on('ready',inicio);