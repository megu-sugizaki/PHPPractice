<?php
$fp = fopen('names.txt', 'w');
$fp = fwrite($fp, "taro\n");


//a = append 追記処理
$fp = fopen('names.txt', 'a');

//2回実行するとその分増える
fwrite($fp, "jiro\n");
fwrite($fp, "saburo\n");

//この後にファイル操作がなければ描かなくてOK
//わかりやすいので記載
fclose($fp);

