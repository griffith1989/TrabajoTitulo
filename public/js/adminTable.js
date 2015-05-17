$(document).on('ready', function(){

    $('#id').toggle();

    $('#showUser').click(function(){
        $('#id').toggle(1000);
    });

	$('#checkall').click(function() {
        if(this.checked) {
            $('.checkbox').each(function() {
                this.checked = true;
            });
        }else{
            $('.checkbox').each(function() {
                this.checked = false;
            });
        }
    })

    $(document).on('keyup', '#rut', function(e){
        var rut = parseInt($(this).val());
        var temp_rut = $(this).val().replace(/\./g, '');
        var r_rut;
        var dv = 0;
        var j = 0;


        for (var i = 0; i < temp_rut.length; i++) {

            dv = (rut % 10 * (j + 2)) + dv;
            j++;
            if (i == 5) {
                j=0;
            };

            rut = (rut - rut % 10) / 10;

            if (i == 0) {
                r_rut = temp_rut[0];
            };
            if (i == 1) {
                r_rut = temp_rut[0] + temp_rut[1];
            };
            if (i == 2) {
                r_rut = temp_rut[0] + temp_rut[1] + temp_rut[2];
            };
            if (i == 3) {
                r_rut = temp_rut[0] + '.' + temp_rut[1] + temp_rut[2] + temp_rut[3];
            };
            if (i == 4) {
                r_rut = temp_rut[0] + temp_rut[1] + '.' + temp_rut[2] + temp_rut[3] + temp_rut[4];
            };
            if (i == 5) {
                r_rut = temp_rut[0] + temp_rut[1] + temp_rut[2] + '.' + temp_rut[3] + temp_rut[4] + temp_rut[5];
            };
            if (i == 6) {
                r_rut = temp_rut[0] + '.' + temp_rut[1] + temp_rut[2] +temp_rut[3] + '.' + temp_rut[4] + temp_rut[5] + temp_rut[6];
            };
            if (i == 7) {
                r_rut = temp_rut[0] + temp_rut[1] + '.' + temp_rut[2] + temp_rut[3] + temp_rut[4] + '.' + temp_rut[5] + temp_rut[6] + temp_rut[7];
            };
        };

        dv = 11 - (dv % 11);

        if (dv == 10) {
            dv = 'k';
        };
        if (dv == 11) {
            dv = 0;
        };

        $('#rut').val(r_rut);
        $('#dv').val(dv);
    });

    $(document).on('click', '#nombre', function(){

        var fila = $('table tr #nombre').index(this);

        $('#id').toggle(1000);

        $('#id #user').html($('#userTable').find('tr').eq(fila+1).find('td').eq(5).text());
        $('#id #r_rut').html($('#userTable').find('tr').eq(fila+1).find('td').eq(6).text());
        $('#id #r_repcod').html($('#userTable').find('tr').eq(fila+1).find('td').eq(7).text());
        $('#id #r_ncuota').html($('#userTable').find('tr').eq(fila+1).find('td').eq(8).text());
        $('#id #r_tcuota').html($('#userTable').find('tr').eq(fila+1).find('td').eq(9).text());
        $('#id #r_campus').html($('#userTable').find('tr').eq(fila+1).find('td').eq(10).text());
        $('#id #r_rut').html($('#userTable').find('tr').eq(fila+1).find('td').eq(11).text());
        $('#id #r_descr').html($('#userTable').find('tr').eq(fila+1).find('td').eq(12).text());
    });


});
