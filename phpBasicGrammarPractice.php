<?php

$scores = [40, 50, 20, 30];

//小さい順に並び替え
sort($scores);
print_r($scores);

shuffle($scores);
print_r($scores);

//元配列を直接書き換え


//ランダムに要素を2つピックアップ
//