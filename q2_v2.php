<?php
$input = trim(fgets(STDIN));
$temp = str_replace(array("\r\n", "\r", "\n"), '', $input);
$array = explode(" ", $temp);
$n = $array[0];
$d = $array[1];

$monitor_number = $d * 2 + 1;
$answer = ceil($n / $monitor_number);
echo $answer . "\n";
