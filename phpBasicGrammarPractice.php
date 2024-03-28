<?php
//引数が何個きても合計を出したい

function getStats(...$numbers){
  $total = 0;
  foreach($numbers as $number){
    $total += $number;
  }
  return [$total, $total/count($numbers)];

}

print_r(getStats(1, 3, 5));

//合計、平均それぞれの値を変数に代入することもできる
list($sum, $average) = getStats(1, 3, 5);
//上と同じ意味
[$sum, $average] = getStats(1, 3, 5);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;