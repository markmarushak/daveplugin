$(document).ready(function () {

    $('#zipCode').keyup(function () {
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: {type: 'zipCode', val: $(this).val()},
            dataType: 'JSON'
        }).done(function (data) {
            $('#school-district').html('');
            $('#school-district').append('<option value="-">select district</option>')
            if(data.length > 0){
                for(var i=0; i<data.length; i++){
                    $('#school-district').append('<option value="'+data[i].assoc_id+'">'+data[i].name+'</option>')
                }
            }
        });
    });

    $('#school-district').change(function () {
        var valu = $(this).find('option:selected').val();
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: {type: 'schoolD', val: valu},
            dataType: 'JSON'
        }).done(function (data) {
            $('#school').html('');
            $('#school').append('<option value="-">select school</option>');
            if(data.length > 0){
                for(var i=0; i<data.length; i++){
                    $('#school').append('<option value="'+data[i].account_id+'">'+data[i].long_name+'</option>')
                }
            }
        });
    });

    $('#school').change(function () {
        var valu = $(this).find('option:selected').val();
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: {type: 'schools', val: valu},
            dataType: 'JSON'
        }).done(function (data) {
            $('#grade').html('');
            $('#grade').append('<option value="-">select grade</option>');
            if(data.length > 0){
                for(var i=0; i<data.length; i++){
                    $('#grade').append('<option value="'+data[i].grade_level_id+'">'+data[i].description+'</option>')
                }
            }
        });
    });

});

function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}