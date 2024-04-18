<?php

//抽象クラス→継承を前提。子クラスでオーバーライドが必要
//ある程度開発規模が大きくなってから
abstract class BasePost{
   //Post classから移動
    protected $text;

    public function __construct($text)
  {
    $this->text = $text;
  }
  //中小メソッド
  abstract public function show();
}

//中小クラスを継承したのでshowメソッドのオーバーライドが必須
class Post extends BasePost
{

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

//データ型も継承
//中小クラスを継承したのでshowメソッドのオーバーライドが必須
class SponsoredPost extends BasePost
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
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

//2つともBasePostクラスを継承しているため、データ型を変更
function processPost(BasePost $post){
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