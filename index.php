<?php
require_once 'autoload.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="_inc/main.css">
</head>
<body>


<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-step-1" data-toggle="tab" href="#step-1" role="tab"
               aria-controls="nav-step-1" aria-selected="true">
            <span class="round-step">
                <span>1</span>
            </span>
                <span class="nav-step-1">
                <h3>Account Information</h3>
                <p>Enter your first time username password details</p>
            </span>
            </a>
            <a class="nav-item nav-link" id="nav-step-2" data-toggle="tab" href="#step-2" role="tab"
               aria-controls="nav-step-2" aria-selected="false">
            <span class="round-step">
                <span>2</span>
            </span>
                <span class="nav-step-1">
                <h3>Account Information</h3>
                <p>Enter your first time username password details</p>
            </span>
            </a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
               aria-controls="nav-contact" aria-selected="false">
             <span class="round-step">
                <span>3</span>
            </span>
                <span class="nav-step-1">
                <h3>Account Information</h3>
                <p>Enter your first time username password details</p>
            </span>
            </a>

            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
               aria-controls="nav-contact" aria-selected="false">
             <span class="round-step">
                <span>4</span>
            </span>
                <span class="nav-step-1">
                <h3>Account Information</h3>
                <p>Enter your first time username password details</p>
            </span>
            </a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
               aria-controls="nav-contact" aria-selected="false">
             <span class="round-step">
                <span>5</span>
            </span>
                <span class="nav-step-1">
                <h3>Account Information</h3>
                <p>Enter your first time username password details</p>
            </span>
            </a>

        </div>
    </nav>

</div>

<div class="container" id="content">



        <header class="main-color">
            <h3>Student Accident Enrolment</h3>
            <hr>
        </header>
        <div class="tab-content" id="nav-tabContent">

            <?php require_once('step-1.php'); ?>
            <?php require_once('step-2.php'); ?>
            <?php require_once('step-3.php'); ?>
            <?php require_once('step-4.php'); ?>
            <?php require_once('step-5.php'); ?>

        </div>

</div>


<!-- Java Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

<script src="_inc/api.js"></script>

<script>

    var cart = {
        money: 0
    };
    
    function getBenefits(el){

        var data = {
            type:'benefits',
            id: 0
        }

        if(el.hasClass('array')){
            data.id = {
                low: el.attr('low-plan-id'),
                mid: el.attr('mid-plan-id'),
                high: el.attr('high-plan-id'),
            }
        }else{
            data.id = el.attr('data-plan-id');
        }

        $.ajax({
            method:'GET',
            url: './ajax.php',
            data: data,
            dataType: 'json'
        }).done(function(data){
            console.log(data);
            var cont = $('#content-benefit');
            cont.html('');
            console.log(data.length);
            if(data.length < 20){
                cont.append(`<table class="table"><thead>
                <tr>
                <th>Description</th>
                <th>Low</th>
                <th>Mid</th>
                <th>High</th>
                </tr></thead>`);
                for (var c = 0; c < data[0].length; c++) {
                    cont.find('table').append(`
                        <tr>
                        <td>`+data[0][c].description+`</td>
                        <td>`+data[0][c].maximums_description+`</td>
                        <td>`+data[1][c].maximums_description+`</td>
                        <td>`+data[2][c].maximums_description+`</td>
                        </tr>`);
                }
            }else{
                cont.append(`<table class="table">
                <tr>
                <th>Description</th>
                <th>benefits</th>
                </tr>`);
                 for (var c = 0; c < data.length; c++) {
                    cont.find('table').append(`
                        <tr>
                        <td>`+data[c].description+`</td>
                        <td>`+data[c].maximums_description+`</td>`);
                }
            }

            cont.append('</table>');
        });
    }

    
    function r_id(max){
        return Math.floor(Math.random() * Math.floor(max))
    }

    function addCart(el){
        
        var data = {
            price: el.attr('data-price'),
            name: el.prev().prev().text(),
            temp_id: r_id(1000)
        }

        if(el.hasClass('btn-radio')){
            var radio_b = el.parent().parent().find('a.btn-danger');
            var radio_parent = el.parent().parent().find('a.btn-danger').attr('data-price');

            
            

            if(el.hasClass('btn-danger')){
                
                el.removeClass('btn-danger').text('Add Cart');
                cart.money = parseInt(cart.money) - parseInt(data.price);
                showAlert(data.name,data.temp_id, 'remove');

            }else {
                if (radio_b.length == 1) {
                    cart.money = parseInt(cart.money) - parseInt(radio_parent);
                    radio_b.removeClass('btn-danger').text('Add Cart');
                }
                el.addClass('btn-danger').text('Remove');
                cart.money = parseInt(cart.money) + parseInt(data.price);
                showAlert(data.name,data.temp_id);

            }

        }else{
             if(el.hasClass('btn-danger')){
                el.removeClass('btn-danger').text('Add Cart');
                cart.money = parseInt(cart.money) - parseInt(data.price);
                showAlert(data.name,data.temp_id, 'remove');

            }else {
                el.addClass('btn-danger').text('Remove');
                cart.money = parseInt(cart.money) + parseInt(data.price);
                showAlert(data.name,data.temp_id);
            }
        }

       

        console.log(cart.money);
    }

    function showAlert(name, id, type='success') {
        if(type=='success'){
             var info = `<div id="al_`+id+`" class="alert alert-success" role="alert">`+name+` <b>all pay: `+cart.money+`</b></div>`;
         }else{
            var info = `<div id="al_`+id+`" class="alert alert-warning " role="alert">remove `+name+` from cart! <b>all pay: `+cart.money+`</b></div>`;
         }
       

        if($('body').find('.block-alert').length > 0){
            $('.block-alert').prepend(info);
        }else{
            $('body').prepend(`<div class="wrap-alert"><div class="block-alert"></div></div>`);
            $('.block-alert').prepend(info);
        }

        setTimeout(function(){
            hideAlert(id);
        },1000);
    }

    function hideAlert(id){
        $('#al_'+id).remove();
    }

   

    

</script>

</body>
</html>