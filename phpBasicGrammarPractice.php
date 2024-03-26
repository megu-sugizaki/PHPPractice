<?php

function sum($a, $b, $c){
  $total = $a + $b + $c;
  
  // $total < 0 がtrueなら0, falseなら$total
  return $total < 0 ? 0 : $total;
}

echo sum(100, 300, 500) . PHP_EOL;
echo sum(-1000, 300, 500);

