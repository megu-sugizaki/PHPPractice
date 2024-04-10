<?php
//前回のnames.txtはterminalで削除しておく
//rm names.txt

// //fopenを使わずにファイル操作をする

// $contents = "taro\njiro\nsaburo\n";

// //ファイル名と内容を渡す
// file_put_contents('names.txt', $contents);

// //fopenを使わず読み込む
// $contents = file_get_contents('names.txt');

// echo $contents;

//コードを実行するだけ catコマンドなし

//1行ずつ配列の要素として読み込むことも可能
//末尾の改行を無視するにはFILE_IGNORE_NEW_LINES
$lines = file('names.txt', FILE_IGNORE_NEW_LINES);

//$linesの中身を確認
var_dump($lines);