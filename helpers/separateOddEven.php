<?php

function separateOddEven($nums)
{
    $odd = [];
    $even = [];

    for($i = 0; $i < count($nums); $i++)
    {
        if ($nums[$i] % 2 == 0) {
            array_push($even, $nums[$i]);
        } else {
            array_push($odd, $nums[$i]);
        }
        
    }

    return [
        $odd,
        $even,
    ];
}