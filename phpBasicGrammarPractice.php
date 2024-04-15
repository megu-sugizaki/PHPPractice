<?php
//強い型つけができる
declare(strict_types=1);

// クラスにまとめると後から修正が楽　コードの見通しもよくなる
class Post
{
  // プロパティ 型を指定できるが弱い型つけ。
  // 数値を入れても文字列にしてくれてしまう
  private string $text;
  private $likes = 0;

    public function __construct(string $text){
    $this->text = $text;
  }
  
  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

}

$posts = [];

//strict にしたので型が合わない
// $posts[0] = new Post(5); //インスタンス

$posts[1] = new Post('hello again'); //インスタンス

$posts[0]->show();
$posts[1]->show();