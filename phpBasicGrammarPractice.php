<?php
$scores = [30, 40, 50];



// //先頭に要素を追加 いくつでも追加可能
// array_unshift($scores, 10, 20);

// //末尾に要素を追加
// array_push($scores, 60, 70);

// //末尾に一文字だけの場合
// $scores[] = 80;

//要素を削除　1つ目の要素を削除
// array_shift($scores);

//末尾の要素を削除
array_pop($scores);

print_r($scores);

