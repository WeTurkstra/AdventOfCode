<?php

$inputs  = file('input.txt', FILE_IGNORE_NEW_LINES);

$depth = 0;
$horizontal = 0;

foreach($inputs as $input) {
    list($direction, $distance) = explode(' ', $input);

    switch ($direction) {
        case "forward":
            $horizontal += $distance;
            break;
        case "up":
            $depth -= $distance;
            break;
        case "down":
            $depth += $distance;
            break;
    }
}

echo $depth * $horizontal;
