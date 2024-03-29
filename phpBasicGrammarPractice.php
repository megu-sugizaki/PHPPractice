<?php
$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;

//値を埋め込む箇所にデータ型に応じた記号語書く　文字列→s, 浮動小数点数→f
// その後に埋め込む値を渡す
//表示幅を指定。$nameは15桁分スペース（幅）を開ける
//$scoreは10桁分、小数点以下は2桁分
// $info = sprintf("[%15s][%10.2f]", $name, $score);

//$nameを左詰め
//$scoreの空いてるスペースを0で埋める
$info = sprintf("[%-15s][%010.2f]", $name, $score);

echo $info . PHP_EOL;

//文字列ではなく短に表示させたい
$info = printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);