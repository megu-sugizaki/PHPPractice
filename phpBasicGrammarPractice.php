<?php

$input = ' dot_Meg ';
$input = trim($input);

// echo strlen($input) . PHP_EOL;

// //文字列の検索
// //検索したい文字列を渡すと何文字目にあるか表示
// echo strpos($input, '_') . PHP_EOL;

//文字列の置換 _を-に
$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;
