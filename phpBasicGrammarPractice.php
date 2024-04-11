<?php
if(!file_exists('data/saburo.txt')){
  echo 'saburo not here!' . PHP_EOL;
//このファイルの存在確認でsaburoがなかったら処理を止めたい場合
  exit;
}

//ディレクトリやファイルが存在するか確認
if(file_exists('data') === true){
  echo 'data exists!' . PHP_EOL;
}

//ファイルが書き込み可能か調べる
if (is_writable('data/taro.txt') === true){
  echo 'taro is writable' . PHP_EOL;
}

//ファイルが読み込み可能か調べる
if (is_readable('data/taro.txt') === true){
  echo 'taro is readable' . PHP_EOL;
}