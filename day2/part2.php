<?php

$inputs  = file('input.txt', FILE_IGNORE_NEW_LINES);

$depth = 0;
$horizontal = 0;
$aim = 0;

foreach($inputs as $input) {
    list($direction, $distance) = explode(' ', $input);

    switch ($direction) {
        case "forward":
            $horizontal += $distance;
            $depth += ($aim * $distance);
            break;
        case "up":
            $aim -= $distance;
            break;
        case "down":
            $aim += $distance;
            break;
    }
}

echo $depth * $horizontal;
