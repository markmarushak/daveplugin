<?php

if($_GET['type'] == 'zipCode'){
    $district = file_get_contents('http://mymst.myers-stevens.com/api/district/'.$_GET['val']);
    echo $district;
}

if($_GET['type'] == 'schoolD'){
    $district = file_get_contents('http://mymst.myers-stevens.com/api/school/'.$_GET['val']);
    echo $district;
}

if($_GET['type'] == 'schools'){
    $district = file_get_contents('http://mymst.myers-stevens.com/api/grade/'.$_GET['val']);
    echo $district;
}