$(document).on('ready', function(){

    $('#addNews').toggle();

    $('#itemNoticia').click(function(){
        $('#addNews').toggle(1000);
    });

    $('#cerrarNot').click(function(){
        $('#addNews').toggle(1000);
    });
});