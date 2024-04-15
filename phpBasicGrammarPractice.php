<?php
// クラスにまとめると後から修正が楽　コードの見通しもよくなる
class Post
{
  // プロパティ
  public $text;
  //宣言する時にlikesを0に初期化していく
  public $likes = 0;


  //引数とプロパティを同じ値にすることも可能
  //likesは0からスタートしたいので初期値を0
  //引数からも$likesを削除
    public function __construct($text){
    $this->text = $text;
  }
  
  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];
$posts[0] = new Post('hello'); //インスタンス

$posts[1] = new Post('hello again'); //インスタンス

$posts[0]->show();
$posts[1]->show();