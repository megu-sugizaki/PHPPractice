<?php

$signal = 'red';

switch ($signal){
  case 'red':
    echo 'stop' . PHP_EOL;
    break;
  case 'yellow';
    echo 'caution!' . PHP_EOL;
    break;
  case 'blue';
    echo 'go!' . PHP_EOL;
    break;
}
//セミコロンいらず