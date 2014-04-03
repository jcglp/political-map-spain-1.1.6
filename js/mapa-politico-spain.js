jQuery(function($){
	$(document).ready(function(){

		$('img#wp-img-mapa').mouseover(function(){

			var imagen = $(this);
			ancho = imagen.width();
			alto =  imagen.height();

			/*nombre_mapa = "#wp-img-mapa"+ancho+"x"+alto;*/
			nombre_mapa = "#wp-img-mapa"+ancho+"x";

			$(this).attr("usemap",nombre_mapa);
			
			
			return false;
		});
		
	
	});
});