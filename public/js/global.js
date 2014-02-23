$().ready(function() {	

	//client validation
	$('form').parsley( {		
		errorClass: 'error',		
		errors: {        
			container: function (element) {								
				var $container = element.parent().find(".parsley-container");
				if ($container.length === 0) {
					$container = $("<small class='error'></small>").insertAfter(element);
				}
				return $container;
			}    
		}
	});
	$( 'form' ).parsley( 'addListener', {
		onFieldSuccess: function ( elem ) {    		    		
			elem.next().remove();       
		}
	} );

	$('.datepicker').fdatepicker(		
		);
	/*
	//dates
	$('.datepicker').datepicker({
		//showOn: 'both',
		//buttonImage: 'calendar.png',
		buttonImageOnly: true,
		//changeYear: true,
		//numberOfMonths: 2,
		onSelect: function(textoFecha, objDatepicker){
			console.log(textoFecha);
			//$("#mensaje").html("<p>Has seleccionado: " + textoFecha + "</p>");
		}
	}); */
} );
