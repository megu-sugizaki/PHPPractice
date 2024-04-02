<?php
$scores = [30, 40, 50, 60, 70, 80];

//途中の要素を削除してつめたい 配列、位置、個数
//元配列を直接変更
// array_splice($scores, 2, 3);

// print_r($scores);

//削除した位置に要素を挿入できる, 何番目から何個分削除してこの要素を入れる
// array_splice($scores,2, 3, 100);
// print_r($scores);

//削除せずに間に要素を挿入 加えて複数要素を挿入
array_splice($scores, 2, 0, [100, 101]);
print_r($scores);