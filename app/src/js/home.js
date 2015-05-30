$(document).ready(function(){

	function toggleFav () {
		if ($('#fav').hasClass('fa-star')){
			action = 'del';
		} else {
			action = 'add';
		}
		$.ajax({
			url: "http://localhost:8888/api.php/user/"+$('#username').data('userid')+"/favoritos",
			method: "POST",
			async: false,
			data: {
				action: action,
				id: $('#accCode').text()
			},
			dataType: "JSON",
			success: function( xhr ) {	
				$("#msgFav").removeClass('bg-danger');
		        $("#msgFav").addClass('bg-success');
				if ($('#fav').hasClass('fa-star')){
					$('#fav').removeClass('fa-star');
					$('#fav').addClass('fa-star-o');
					//$('#fav').tooltip('hide').attr('data-original-title', "Añadir a favoritos").tooltip('fixTitle').tooltip('show');
					$('#fav').tooltip('hide');
					$('#fav').attr('data-original-title', "Añadir a favoritos");
					$('#msgFav').text('Eliminada acción de la lista de favoritos');

				} else {
					$('#fav').removeClass('fa-star-o');
					$('#fav').addClass('fa-star');
					//$('#fav').tooltip('hide').attr('data-original-title', "Eliminar de favoritos").tooltip('fixTitle').tooltip('show');
					$('#fav').tooltip('hide');
					$('#fav').attr('data-original-title', "Eliminar de favoritos");
					$('#msgFav').text('Añadida acción a la lista de favoritos');
				}
			},
			error: function( xhr, textStatus, errorThrown ) {
				$('#msgFav').html('<p>Se ha producido un error en el servidor.</p> <p>Intentalo más tarde<p>');
				$("#msgFav").removeClass('bg-success');
		        $("#msgFav").addClass('bg-danger');
		        console.log(xhr);

			}
		})
	}

	$('#fav').on('click',function(event){
		event.preventDefault;
		event.stopInmediatePropagation;
		$('#msgFav').hide();
		if (typeof(timeout) != 'undefined'){
			console.log('limpia');
			clearTimeout(timeout);
		}
		toggleFav();
		$('#msgFav').css('left',($(window).width()/2)-($('#msgFav').width()/2));
		$('#msgFav').fadeIn(1000);
   		timeout = setTimeout(function() {
        	$('#msgFav').fadeOut(1000);
    		}, 3000);
	})

	$('#accionBtn').on('click',function(event){
		event.preventDefault;
		event.stopInmediatePropagation;
		str = $('#codigoAccion').val();
		if (str.length == 0 || str.match("/^([a-zA-Z0-9]|-){10}$/")) {
			$('#errorAccionVacia').show();
		} else {
			$.ajax({
				url: "http://localhost:8888/api.php/accion/"+$.trim(str),
				method: "GET",
				dataType: "JSON",
				success: function( xhr ) {	
					//accion = $.parseJSON(xhr);
					if (xhr.length == 0){
						$('#errorAccionVacia').show();
						$('#accCode').text('');
						$('#accName').text('');
						$('#accVal').text('');
						$('#accAcul').text('');
						$('#accAnt').text('');
						$('#fav').removeClass('fa-star');
						$('#fav').removeClass('fa-star-o');
					} else {
						$('#errorAccionVacia').hide();

						if (xhr['fav'] == 0){
							$('#fav').removeClass('fa-star');
							$('#fav').addClass('fa-star-o');
							$('#fav').attr("title", "Añadir a favoritos");	
						} else {
							$('#fav').removeClass('fa-star-o');
							$('#fav').addClass('fa-star');
						    $('#fav').attr("title", "Eliminar de favoritos");
						}
						
						$('#fav').tooltip();

						$('#accCode').text(xhr['codigo']);
						$('#accName').text(xhr['nombre']);
						$('#accVal').text(xhr['valor_actual']);
						$('#accAcul').text(xhr['vol_acumulado']);
						$('#accAnt').text(xhr['valor_jornadaAnterior']);
					}

				},
				error: function( xhr, textStatus, errorThrown ) {
					$('#accCode').text('');
					$('#accName').text('');
					$('#accVal').text('');
					$('#accAcul').text('');
					$('#accAnt').text('');
					$('#fav').removeClass('fa-star');
					$('#fav').removeClass('fa-star-o');
					console.log(xhr);
					if (xhr.status == 404) {
						$('#errorAccionVacia').show();
					}

				}
			})
		}
	});
});