<?php

function sum($a, $b, $c){
  return $a + $b + $c;
}

//関数を直接代入する場合 = 無名関数　関数を別の関数の引数にできる
//functionの後にスペース、{は改行し無い、最後はセミコロン
$sum = function ($a, $b, $c){
  return $a + $b + $c;
};

echo $sum(100, 300, 500);
