<?php

$lines = file('measurements.txt', FILE_IGNORE_NEW_LINES);

$prev = null;
$highMeasurements = 0;
for ($i = 0; $i < count($lines); $i++) {
    if($prev == null) {
        $prev = $lines[$i];
        continue;
    }
    if($lines[$i] > $prev) {
        $highMeasurements++;
    }
    $prev = $lines[$i];
}
echo $highMeasurements;
exit;
