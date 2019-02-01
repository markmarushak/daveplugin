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

</body>
</html>