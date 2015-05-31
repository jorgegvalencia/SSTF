$(document).ready(function(){
	$( "#lista" ).sortable({
		stop: function(event, ui) {
			data={'favorites':{}};
			$("#lista>li").each(function(newPosition,favoriteElement){
				if ($(favoriteElement).data('position') != newPosition){
					console.debug($(favoriteElement).data('code')+": "+$(favoriteElement).data('position')+" -> "+newPosition);
					data['favorites'][$(favoriteElement).data('code')] = newPosition;
				}
			});
			$.ajax({
				url: "http://localhost:8888/api/api.php/user/"+$('#username').data('userid')+"/favoritos/reorder",
				method: "POST",
				async: false,
				data: data,
				dataType: "text",
				success: function( xhr ) {	

				},
				error: function( xhr, textStatus, errorThrown ) {
						console.debug(xhr.responseText)	
						$('#msgFav').hide();
						if (typeof(errorTimeoutMsg) != 'undefined'){
							clearTimeout(errorTimeoutMsg);
						}
						if (typeof(errorTimeoutRedirect) != 'undefined'){
							clearTimeout(errorTimeoutRedirect);
						}
						$('#msgFav').html('<p>Se ha producido un error en el servidor al reordenar sus favoritos.</p> <p>La pagina será recargada<p>');
		        		$('#msgFav').css('left',($(window).width()/2)-($('#msgFav').width()/2));
						$('#msgFav').fadeIn(1000);
				   		errorTimeoutMsg = setTimeout(function() {
				        	$('#msgFav').fadeOut(1000);
				    		}, 3000);
						errorTimeoutRedirect = setTimeout(function() {
				        	window.location.reload();
				    		}, 3000);

					}
			});
		}
	});
    $( "#lista" ).disableSelection();
	timeoutsTimers = [];
	timeouts = [];
	function countDown(codigo){
		console.log(timeouts);
		console.log(timeoutsTimers);
        if (--timeoutsTimers[codigo]) {
           $('#timer'+codigo).text(timeoutsTimers[codigo] + ' s');
           timeouts[codigo] = setTimeout(countDown, 1000,codigo);
        } else {
            $("#accion"+codigo).remove();
        	if ($("#lista li").length == 0) {
				$("#wrapContent").html('');
				$("#wrapContent").html('<h4>Usted no tiene favoritos</h4>');
        	}
        }
    }

    function toggleFav (action, code, position) {
    	var data = {
				action: action,
				id: code
			}
		if ($.type(position) != 'undefined'){
			data['position'] = position;
		}
		$.ajax({
			url: "http://localhost:8888/api/api.php/user/"+$('#username').data('userid')+"/favoritos",
			method: "POST",
			async: false,
			data: data,
			dataType: "JSON",
			success: function( xhr ) {	
				if (action == 'del'){
					$("#data"+code).hide();
					$("#deleted"+code).show();
					timeoutsTimers[code] = 11;
					countDown(code);
				} else {
					$("#deleted"+code).hide();
					$("#data"+code).show();
					clearTimeout(timeouts[code]);
				}
	        	if ($("#lista li").length == 0) {
					$("#wrapContent").html('');
					$("#wrapContent").html('<h4>Usted no tiene favoritos</h4>');
	        	}
				if (typeof(errorTimeout) != 'undefined'){
					clearTimeout(errorTimeout);
				}
			},
			error: function( xhr, textStatus, errorThrown ) {		
				$('#msgFav').hide();
				if (typeof(errorTimeout) != 'undefined'){
					clearTimeout(errorTimeout);
				}
				$('#msgFav').html('<p>Se ha producido un error en el servidor.</p> <p>Intentalo más tarde<p>');		
		        $('#msgFav').css('left',($(window).width()/2)-($('#msgFav').width()/2));
				$('#msgFav').fadeIn(1000);
		   		errorTimeout = setTimeout(function() {
		        	$('#msgFav').fadeOut(1000);
		    		}, 3000);

			}
		})
	}

	$('.btnDel').on('click',function(event){
		event.preventDefault;
		event.stopInmediatePropagation;
		var codigo = $(this).data('code');
		toggleFav('del',codigo);
		



	});
	$('.undo').on('click',function(){
		var codigo = $(this).data('code');
		var posicion = $(this).data('position');
		toggleFav('add',codigo,posicion);
	});

});