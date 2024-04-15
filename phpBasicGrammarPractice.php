<?php
// クラス
class Post
{
  // プロパティ
  public $text;
  public $likes;
  
  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[0] = new Post(); //インスタンス
$posts[0] ->text = 'hello';
$posts[0]->likes = 0;
// $posts[1] = ['text' => 'hello again', 'likes' => 0];
$posts[1] = new Post(); //インスタンス
$posts[1] ->text = 'hello again';
$posts[1]->likes = 0;

//クラス内で定義しているので不要
// function show($post)
// {
//   printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);

$posts[0]->show();
$posts[1]->show();