$(document).on('ready', function(){

    $('#updateUser').toggle();

    $('#imgAvatar').click(function(){
        $('#updateUser').toggle(1000);
    });

    $('#updateClose').click(function(){
        $('#updateUser').toggle(1000);
        $('#updateTable :input').each(function(){
			$(this).val('');
		});
    });
});