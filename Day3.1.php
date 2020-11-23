<?php
$directions = str_split(file_get_contents("Day3.txt"));
$array = array();
$x = 0;
$y = 0;
foreach($directions as $direction){
    switch($direction){
        case "^":
            $y++;
            break;
        case ">":
            $x++;
            break;
        case "v":
            $y--;
            break;
        case "<":
            $x--;
            break;
     }
     $array[$y][$x] = "O";
}
echo array_sum(array_map("count", $array));