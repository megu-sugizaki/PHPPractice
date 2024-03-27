<?php

// $score = 90;
// $score = 40;
// $score = 100;

//最後にカンマを入れると入れ替え、削除、編集がしやすい
//キーの設定
$scores = [
  'first'  => 90, 
  'second' => 60, 
  'third'  => 100,];

//配列の中身を表示する
//型もわかる
var_dump($scores);
//改行されてみやすい
print_r($scores);

echo $scores['third'] . PHP_EOL;