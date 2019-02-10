<?php


function numberSelect($a, $b)
{
    while ($a<=$b)
    {
        echo '<option value="'.$a.'">'.$a.'</option>';
        $a++;
    }
}