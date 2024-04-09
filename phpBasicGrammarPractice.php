<?php
$scores = [
'Meg' => 80,
'Chihiro' => 70,
'Taka' => 60,
];

//sortやrsortだとキーが削除されて連番になる
// sort($scores);
// print_r($scores);
// rsort($scores);
// print_r($scores);

//キーを保持したい
//値小さい順
asort($scores);
print_r($scores);
//値大きい順
arsort($scores);
print_r($scores);

//キーでソートしたい
//キーアルファベット小さい順
ksort($scores);
print_r($scores);
//キーアルファベット大きい順
krsort($scores);
print_r($scores);
