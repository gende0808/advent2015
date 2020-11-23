<?php
$array = file_get_contents("Day2.txt");
$exploded_array = explode("\n", $array);
$done = 0;
foreach ($exploded_array as $item) {
    $hwl = explode("x", $item);
    $height_width = ((int)$hwl[0] * (int)$hwl[1]) * 2;
    $height_length = ((int)$hwl[0] * (int)$hwl[2]) * 2;
    $width_length = ((int)$hwl[1] * (int)$hwl[2]) * 2;
    $collection = array($height_width, $height_length, $width_length);
    $totalsum = $height_width + $height_length + $width_length + (min($collection) / 2);
    $done += $totalsum;
}
echo $done;