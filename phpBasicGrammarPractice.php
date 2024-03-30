<?php

//文字種の異なる文でそれぞれの値を取り出したい
//20200401Item-A 1200
//substr(文字列, 位置, 桁数)

//文字を置換したい
//substr_replace(文字列文字列, 置換文字列, 位置, 桁数)

$input = '20200320Item-A 1200';

//0文字目から8桁分
$date = substr($input, 0, 8);

//8文字目から8桁分
$product = substr($input, 8, 8);

//16文字目から4桁分 最後までの場合最後の引数は不要
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
//echo $amount . PHP_EOL;
//3桁以上はnumber_formatで見やすくなる
echo number_format($amount) . PHP_EOL;



