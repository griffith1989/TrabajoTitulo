$(document).on('ready', function(){

		  $('#opcion1').mouseenter(function(){
			$('#opcion1').animate({
				left:'0px'
			},0);
			});
			$('#opcion2').mouseenter(function(){
					$('#opcion2').animate({
						left:'0px'
					},0);
			});
			$('#opcion3').mouseenter(function(){
					$('#opcion3').animate({
						left:'0px'
					},0);
			});
			$('#opcion4').mouseenter(function(){
					$('#opcion4').animate({
						left:'0px'
					},0);
			});
			$('.opcion').mouseleave(function(){
					$('.opcion').animate({
						left:'-90px'
					},0);
			});

});
