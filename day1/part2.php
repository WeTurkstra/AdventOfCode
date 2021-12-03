<?php

$lines = file('measurements.txt', FILE_IGNORE_NEW_LINES);

$prev = null;
$highMeasurements = 0;
for ($i = 0; $i < count($lines); $i++) {
    if($prev == null) {

        $prev = getSum($lines, $i);
        continue;
    }
    if(getSum($lines, $i) > $prev) {
        $highMeasurements++;
    }
    if(getSum($lines, $i) === null) {
        break;
    }
    $prev = getSum($lines, $i);
}
echo $highMeasurements;
exit;


function getSum($lines, $index) {
    if(isset($lines[$index]) && isset($lines[$index + 1]) && isset($lines[$index + 2])) {
        return $lines[$index] + $lines[$index + 1] + $lines[$index + 2];
    }
    return null;
}