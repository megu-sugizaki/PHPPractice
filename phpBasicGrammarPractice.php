<?php

//関数の外すべてで有効なグローバルスコープ
$rate = 1.1;

function sum($a, $b, $c)
{
  //rateが関数の外で定義されている場合
  // global $rate;
  //関数内のみで有効なローカルスコープ
  $rate = 1.08;
  return ($a+$b+$c) * $rate;
}

// sum(100, 200, 300);
// sum(300, 400, 500);

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;