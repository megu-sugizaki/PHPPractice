<?php

$signal = 'blue';

switch($signal){
  case 'red':
    echo 'Stop' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution"' . PHP_EOL;
    break;
  case 'blue':
  case 'green':
    echo 'Go!' . PHP_EOL;
    break;
  default:
    echo 'Wrong signal!!' . PHP_EOL;
    break;
}