<?php
$input = 'Call us at 03-3001-1256 or 03-3015-3222';

//電話番号を抜き出すためのパターンを指定
//スラッシュで囲む、その中に正規表現
//数値が2桁分、4桁分、4桁分
$pattern = '/\d{2}-\d{4}-\d{4}/';

//検索したいパターン、文字列、検索結果を渡す変数
//最初に見つかった結果だけを格納
preg_match($pattern, $input, $matches);
//全てのマッチした結果を格納
preg_match_all($pattern, $input, $matches);

print_r($matches);

//パターンと置換後の文字列、検索したい文字列を渡すと置換して売れる
//置換したい文字列を変数に代入、その変数と、置換後の文字列、元の文字列の変数を記載
$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;


