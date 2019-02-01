jQuery(document).ready(function ($) {

    $('#zipCode').keyup(function () {
        var select = $('#school-district');
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: {type: 'zipCode', val: $(this).val()},
            dataType: 'JSON'
        }).done(function (data) {
           if(data.length > 0){

               select.html('');
               select.append('<option value="-">select</option>');
               if(data.length > 0){
                   for(var i=0; i<data.length; i++){
                       $('#school-district').append('<option ' +
                           'value="'+data[i].assoc_id+'"' +
                           ' data-highest="'+data[i].highest_grade_level+'"' +
                           ' data-lowest="'+data[i].lowest_grade_level+'"' +
                           ' data-year="'+data[i].web_display_school_year+'">'+data[i].name+'</option>')
                   }
               }
               select.removeAttr('disabled');
           }
        });
    });

    $('#school-district').change(function () {
        var select = $('#school');
        var valu = $(this).find('option:selected').val();
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: {type: 'schoolD', val: valu},
            dataType: 'JSON'
        }).done(function (data) {
            if(data.length > 0){

                select.html('');
                select.append('<option value="-">select school</option>');
                for(var i=0; i<data.length; i++){
                    $('#school').append('<option value="'+data[i].account_id+'">'+data[i].long_name+'</option>')
                }
                select.removeAttr('disabled');
            }
        });
    });

    $('#school').change(function () {
        var select = $('#grade');
        var valu = $(this).find('option:selected').val();
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: {type: 'schools', val: valu},
            dataType: 'JSON'
        }).done(function (data) {
            if(data.length > 0){

                select.html('');
                select.append('<option value="-">select grade</option>');
                for(var i=0; i<data.length; i++){
                    $('#grade').append('<option value="'+data[i].grade_level_id+'">'+data[i].description+'</option>')
                }
                select.removeAttr('disabled');
            }
        });
    });



    $('#form_step_1').submit(function (event) {
        event.preventDefault();
        var main = $('#school-district option:selected');
        var data = {
            type: 'step_1',
            assocID: main.attr('value'),
            schoolYear: main.attr('data-year'),
            lowestGradeLevel: main.attr('data-lowest'),
            highestGradeLevel: main.attr('data-highest')
        };
        $('#step-'+$(this).attr('data-next-tab')).addClass('active show');
        $.ajax({
            method: 'GET',
            url: '/ajax.php',
            data: data,
            dataType: 'JSON'
        }).done(function (data) {
            console.log(data);
            for(var i=0; i<data.length; i++)
            {
                $('#content_step_2').append('' +
                    '<div class="col-sm-12" data-webplan-id="'+data[i].plan_type_id+'">'+
                    '<header><b>'+data[i].web_display_header+'</b></header>'+
                    data[i].web_display_collateral+
                    '<div class="butt">' +
                    '' +
                    '</div>'+
                    '</div>');
                getBuyButton(data[i].plan_type_id);
            }
        });
        $(this).parent().removeClass('active show');
        $('#step-'+$(this).attr('data-next-tab')).addClass('active show');


    });

    function getBuyButton(plan_id) {

        var main = $('#school-district option:selected');
        var data = {
            type: 'planprem',
            assocID: main.attr('value'),
            planTypeId: plan_id,
            lowestGradeLevel: main.attr('data-lowest'),
            highestGradeLevel: main.attr('data-highest')
        };

        $.ajax({
            method: 'GET',
            url: './ajax.php',
            data: data,
            dataType: 'JSON'
        }).done(function (data) {
            console.log(data);
            if(data[0].low_option_premium != null){
                console.log('low_option_premium');
                $('*[data-webplan-id="'+data[0].plan_type_id+'"] .butt').append('' +
                    '<div class="but-block">'+
                        '<b>$'+data[0].low_option_premium+' Base Option</b>'+
                        '<p>Best price, lowest covarege</p>'+
                        '<a href="#" class="btn btn-success" data-price="'+data[0].low_option_premium+'">Add to Cart</a>' +
                    '</div>'+
                    '<div class="but-block">'+
                        '<b>$'+data[0].mid_option_premium+' Mid Option</b>'+
                        '<p>Great price - Great covrage</p>'+
                        '<a href="#" class="btn btn-success" data-price="'+data[0].mid_option_premium+'">Add to Cart</a>' +
                    '</div>'+
                    '<div class="but-block">'+
                        '<b>$'+data[0].high_option_premium+' High Option</b>'+
                        '<p>Best Covarage - Higher cost</p>'+
                        '<a href="#" class="btn btn-success" data-price="'+data[0].high_option_premium+'">Add to Cart</a>' +
                    '</div>');
            }else if(data[0].initial_option_premium != null){
                console.log('initial_option_premium');
                $('*[data-webplan-id="'+data[0].plan_type_id+'"] .butt').append('' +
                    '<a href="#" class="btn btn-success">'+data[0].initial_option_premium+'</a>',
                    '<a href="#" class="btn btn-success">'+data[0].bimonthly_option_premium+'</a>'
                );
            }else if(data[0].standard_premium != null){
                console.log('standard_premium');
                $('*[data-webplan-id="'+data[0].plan_type_id+'"] .butt').append('' +
                    '<a href="#" class="btn btn-success">'+data[0].standard_premium+'</a>');
            }
            var p_h = $('*[data-webplan-id="' +data[0].plan_type_id+'"] p:nth-child(2)').html();
            $('*[data-webplan-id="'+data[0].plan_type_id+'"] header').append('<p>'+p_h+'</p>');
            p_h.html(' ');

        });
    }

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