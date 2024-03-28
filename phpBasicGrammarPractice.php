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