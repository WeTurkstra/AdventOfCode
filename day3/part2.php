<?php

$inputs = file('input.txt', FILE_IGNORE_NEW_LINES);

function findNumber($set, $index, $least = false) {
    $count = 0;
    $ones = [];
    $zeros = [];
    foreach($set as $input) {
        $count += $input[$index];
        if($input[$index] == 1) {
            $ones[] = $input;
        } else {
            $zeros[] = $input;
        }
    }

    if(count($zeros) == 0 || count($ones) == 0) {
        return count($zeros) == 0 ? $ones : $zeros;
    }
    
    if($count == count($set) / 2) {
        return $least ? $zeros : $ones;
    }
    if ($count > count($set) / 2) {
        return $least ? $zeros : $ones;
    } else {
        return $least ? $ones : $zeros;
    }
}

$oxygenRating = $inputs;
$co2Rating = $inputs;
for($i = 0; $i < strlen($inputs[0]); $i++) {
    if(count($oxygenRating) > 1) {
        $oxygenRating = findNumber($oxygenRating, $i);
    }

    if(count($co2Rating) > 1) {
        $co2Rating = findNumber($co2Rating, $i, true);
    }
}

$oxygenRating = $oxygenRating[0];
$co2Rating = $co2Rating[0];
//
//var_dump($oxygenRating);
//var_dump($co2Rating);
//exit;


echo bindec($oxygenRating) * bindec($co2Rating);