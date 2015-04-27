$(document).on('ready', function(){

    $('#addUser').toggle();

    $('#agregar').click(function(){
        $('#addUser').toggle(1000);
    });

    $('#cerrar').click(function(){
        $('#addUser').toggle(1000);
        $("#tableAdd :input").each(function(){
			$(this).val('');
		});
    });
});