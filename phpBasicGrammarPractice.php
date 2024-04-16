<?php

class Post
{
  //子クラスで使いたい場合protected
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

//データ型も継承
class SponsoredPost extends Post
{
  //広告主の情報を保持
  private $sponsor;
  
  //newする時にtextと一緒に$sponsorを渡す
  public function __construct($text, $sponsor){
    //$textをtext propertyにセットしたいが親クラスですでに定義済み
    parent::__construct($text);
    //$sponsorもsponsor propertyにセット
    $this -> sponsor = $sponsor;
  }

  //親クラスと同名のメソッドを再定義することも可能→オーバーライド
  public function show(){
    //$textはprivate定義なのでclassを跨いで使えない
    printf('%s by $s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

//データ型の継承を見るためPost型のメソッドを作成
//子クラスや親クラスで変更があってもメソッドは変更不要となる
function processPost(Post $post){
  $post -> show();
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
//$textと$sponsorを渡す
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();

//SponsoredPostもPost型を使えるのでメソッドがうまく行く
foreach ($posts as $post){
  processPost($post);
}