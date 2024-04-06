<?php

$scores = [40, 50, 20, 30];

//小さい順に並び替え
sort($scores);
print_r($scores);

shuffle($scores);
print_r($scores);

//ランダムに配列の中身を返す $scoresから2こ
//新しい配列を返すので変数で受ける
//帰ってくるのは$scoresのキーの方
$picked = array_rand($scores, 2);
//値をピックアップする場合はこう
echo $scores[$picked[0]] . PHP_EOL;
echo $scores[$picked[1]] . PHP_EOL;

//元配列を直接書き換え


//ランダムに要素を2つピックアップ
//