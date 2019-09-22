<?php
$input_line = trim(fgets(STDIN));
$array = [];
for ($i = 0; $i < $input_line; $i++) {
  $s = trim(fgets(STDIN));
  $s = str_replace(array("\r\n", "\r", "\n"), '', $s);
  $array[] = $s;
}

$max_value = max($array);
$max_key = array_search($max_value, $array);

for ($i = 0; $i < $input_line; $i++) {
  if ($i == $max_key) {
    unset($array[$i]);
    echo max($array) . "\n";
  } else {
    echo $max_value . "\n";
  }
}
