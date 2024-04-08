<?php

//要素を一気に埋めて配列を作る
//0のインデックスから5個分を10の値で埋める
// $scores = array_fill(0, 5, 10);
// print_r($scores);

//1~10までの値を使って配列を作る
// $scores = range(1,10);
// print_r($scores);

$scores = range(1,10,2);
print_r($scores);

//配列の要素を集計する
echo array_sum($scores) . PHP_EOL;

//最大値と最小値
echo max($scores) . PHP_EOL;
echo min($scores) . PHP_EOL;

//平均(一旦合計を出して要素の数で割る)
echo array_sum($scores) / count($scores) . PHP_EOL;