<?php


//$curl = new \markmarushak\curlapi\Transport\Curl();

function numberSelect($a, $b)
{
    $data = [];
    while ($a<=$b)
    {
        echo '<option value="'.$a.'">'.$a.'</option>';
        $a++;
    }
}