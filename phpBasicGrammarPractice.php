<?php
$scores = [30, 40, 50, 60, 70];

//配列の切り出し 配列の変数、何番目から　何個
//元配列は変更せず新しい配列を返す
$partial = array_slice($scores, 2, 3);

//最後までの場合は最後の引数がいらない
$partial = array_slice($scores, 2);

//マイナスをつけると末尾から何番目
$partial = array_slice($scores, -2);


print_r($scores);
print_r($partial);

