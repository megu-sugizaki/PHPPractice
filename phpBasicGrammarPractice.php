<?php

$hp = -15;

// while($hp > 0){
//   echo "Your HP: $hp" . PHP_EOL;
//   $hp -= 15;
// }

//とりあえず1回は実行
//セミコロン必要
do {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while($hp > 0);