<?php
$array = file_get_contents("Day2.txt");
$exploded_array = explode("\n", $array);
$done = 0;
foreach ($exploded_array as $item) {
    $hwl = explode("x", $item);
    asort($hwl, SORT_NUMERIC);
    $collection = array_slice($hwl, 0, 2, false);
    $bow = (int)$hwl[0] * (int)$hwl[1] * (int)$hwl[2];
    $ribbon = ($collection[0] * 2) + ($collection[1] * 2);
    $done += ($bow + $ribbon);
}
echo $done;