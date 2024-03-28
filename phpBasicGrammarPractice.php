<?php

$scores = [
  'first' => 90,
  'second' => 40,
  'third' => 100,
];

// foreach ($scores as $score){
//   echo $score . PHP_EOL;
// }

foreach ($scores as $key => $score){
  echo $key. ' - ' . $score . PHP_EOL;
}