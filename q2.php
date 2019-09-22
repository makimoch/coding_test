<?php
$input = trim(fgets(STDIN));
$temp = str_replace(array("\r\n", "\r", "\n"), '', $input);
$array = explode(" ", $temp);
$n = $array[0];
$d = $array[1];
$answer = 0;
$temp_max = 0;

for ($i = 1; $i <= $n; $i++) {
  $min = $i - $d;
  $max = $i + $d;
  if ($max >= $n) {
    $answer++;
    break;
  } else if ($min >= 1 && $temp_max == 0) {
    $answer++;
    $temp_max = $max;
  } else if ($min > $temp_max) {
    $answer++;
    if ($max >= $n) {
      break;
    } else {
      $temp_max = $max;
    }
  } else {
    continue;
  }
}
echo $answer . "\n";
