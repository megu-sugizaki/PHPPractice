<?php
$posts = [];

//空の配列に投稿といいね数のデータを挿入
$posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[1] = ['text' => 'hello again!', 'likes' => 0];
// print_r($posts);

function show ($post){
  //textとlikesを表示
  printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
}

show($posts[0]);
show($posts[1]);