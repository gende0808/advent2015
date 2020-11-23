<?php
$directions = str_split(file_get_contents("Day3.txt"));
$array = array();
$santax = 0;
$santay = 0;
$robosantax = 0;
$robosantay = 0;
$counter = 0;
foreach ($directions as $direction) {
    if ($counter % 2 == "0") {
        switch ($direction) {
            case "^":
                $santay++;
                break;
            case ">":
                $santax++;
                break;
            case "v":
                $santay--;
                break;
            case "<":
                $santax--;
                break;
        }
        $array[$santay][$santax] = "O";
    } else {
        switch ($direction) {
            case "^":
                $robosantay++;
                break;
            case ">":
                $robosantax++;
                break;
            case "v":
                $robosantay--;
                break;
            case "<":
                $robosantax--;
                break;
        }
        $array[$robosantay][$robosantax] = "O";

    }
    $counter++;
}
echo array_sum(array_map("count", $array));

