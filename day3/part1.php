<?php

$inputs = file('input.txt', FILE_IGNORE_NEW_LINES);
$bits = array_fill(0, strlen($inputs[0]), 0);

foreach ($inputs as $input) {
    for ($i = 0; $i < strlen($input); $i++) {

        $bits[$i] += $input[$i];
    }
}

$gamma = '';
$epsilon = '';
foreach ($bits as $bit) {
    if ($bit < (count($inputs) / 2)) {
        $gamma .= '0';
        $epsilon .= '1';
    } else {
        $gamma .= '1';
        $epsilon .= '0';
    }
}

echo bindec($gamma) * bindec($epsilon);