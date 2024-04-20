<?php

//post classをPost.phpに移動したのでPost.phpを読み込む

//ファイルが読み込めなかった時にエラーになって処理がとまる
//Post classがないとそもそも動作しないのでrequireを使う
require('Post.php');
//上記と同じだが、読み込まないだけで処理が止まらない
//htmlファイル等読み込めなくてもあまり問題がないものに使う
// include('Post.php');


//ファイルがすでに読み込まれていたらスキップしてくれる
//ファイル構成が複雑になると使う
// require_once('Post.php');
// include_once('Post.php');

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

foreach ($posts as $post) {
  $post->show();
}