<?php

require('Post.php');

//例外が発生しそうな箇所をtryで囲む
try{
  $posts[0] = new Post('!');
  //↑ここでthrowされた場合これ以降の処理は実行されない
  $posts[1] = new Post('hello again');
  
  foreach ($posts as $post) {
    $post->show();
  }
  //インスタンスを引数$eで受け取る
} catch (Exception $e){
  //あらかじめgetmexsageメソッドが用意されている
  echo $e -> getMessage();
}
