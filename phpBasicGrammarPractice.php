<?php

// //内容の読み込み
// $fp = fopen('names.txt', 'r');

// //サイズを指定して一気に読み込む
// $contents = fread($fp, filesize('names.txt'));
// fclose($fp);

// echo $contents;

//内容の読み込み
$fp = fopen('names.txt', 'r');

//サイズが大きい場合、先頭から1行ずつ読み込む
//読み込むものがあるうちはtrueなので、whileを使用
//読み込むものがあるうりは、の式
while (($line = fgets($fp)) !== false){
  echo $line;
}

fclose($fp);


