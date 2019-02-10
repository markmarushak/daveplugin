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

if($_GET['type'] == 'step_1'){
    $url = 'http://mymst.myers-stevens.com/api/webplan/'.$_GET['assocID'].'/'.$_GET['schoolYear'].'/'.$_GET['lowestGradeLevel'].'/'.$_GET['highestGradeLevel'];
    $district = file_get_contents($url);
    echo $district;
}

if($_GET['type'] == 'planprem'){
    $url = 'http://mymst.myers-stevens.com/api/planprem/'.$_GET['assocID'].'/'.$_GET['planTypeId'].'/'.$_GET['lowestGradeLevel'].'/'.$_GET['highestGradeLevel'];

    $district = file_get_contents($url);
    echo $district;
}

if($_GET['type'] == 'benefits'){

    if(is_array($_GET['id'])){
        $data = '[';
        $a = 1;
        foreach ($_GET['id'] as $id => $val) {
            # code...

            $url = 'http://mymst.myers-stevens.com/api/planbenefits/'.$val;

            $district = file_get_contents($url);
            if($a != count($_GET['id'])){
                $data .= $district.',';
            }else{
                $data .= $district;
            }
            $a++;
        }
        echo $data.']';

    }else {
        $url = 'http://mymst.myers-stevens.com/api/planbenefits/'.$_GET['id'];

        $district = file_get_contents($url);
        echo $district;

    }
}
    