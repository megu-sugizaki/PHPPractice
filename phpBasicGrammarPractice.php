<?php
// クラスにまとめると後から修正が楽　コードの見通しもよくなる
class Post
{
  // プロパティ
  private $text;
  //宣言する時にlikesを0に初期化していく 
  //privateにしてclassの中でしか使えないようにする
  //アクセス就職私をつけ忘れるとpublicになる
  private $likes = 0;

    public function __construct($text){
    $this->text = $text;
  }
  
  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

  //likeにclassの外からアクセスできるようにするメソッド
  //-などの値にならないように
  public function like(){
    $this->likes++;

    //ロジックも追加できる
    if($this->likes > 100){
      $this->likes = 100;
    }
  }

}

$posts = [];
$posts[0] = new Post('hello'); //インスタンス

$posts[1] = new Post('hello again'); //インスタンス

//$posts[0]にいいねが1 ただし外から操作できてしまうのはセキュリティ的によくない
// $posts[0] -> likes ++;

$posts[0]->like();

$posts[0]->show();
$posts[1]->show();