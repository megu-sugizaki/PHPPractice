<?php
//dataディレクトリをターミナルで作成
//mkdir data

//dataディレクトリにファイルを追加
file_put_contents('data/taro.txt', "taro\n");
file_put_contents('data/taro.txt', "jiro\n");

//実行するとファイルは見れないがデータはできる
//ls -la data でデータファイルの中身があることを確認

//dataのファイル一覧を表示したい
//ファイルを開く
$dp = opendir('data');
//内容を一行ずつ読み込み、読み込むものがなくなったらfalse
//falseでない場合は{}の処理
while(($item = readdir($dp)) !== false){
  //$itemが.や..の場合はloopをスキップ
  //結果に.や..が表示されることを防ぐ
  if ($item === "." || $item === ".."){
    continue;
  }

  echo $item . PHP_EOL;
}