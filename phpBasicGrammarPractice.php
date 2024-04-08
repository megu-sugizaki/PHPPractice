<?php
$prices =[100, 200, 300];

//左の関数を右の配列の要素全てに適用
//$prices全ての要素に10%の税をかける
$newPrices = array_map(
  //無名関数 配列の引数は$nに代入
  // function($n){return $n * 1.1; },
  //上と同じ、アロー関数を使用
  fn($n) => $n * 1.1,
  $prices
);

print_r($newPrices);