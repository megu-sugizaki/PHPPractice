<?php
//PostクラスとPremiumPostクラスのみlikeメソッドを持たせたい
//親クラスは2つ継承できないのでもう1つ用意するのはNG
//抽象メソッドを親クラスに定義するとSponsoredPostまで継承しないといけないのでNG
//→インターフェースを使うと、好きなクラスにメソッド定義を強制させられる
//クラスはいくつでも実装可能で、継承関係にないクラスにも実装可能

interface LikeInterface{
  public function like();

}

abstract class BasePost
{
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  abstract public function show();
}


class Post extends BasePost implements LikeInterface
{
  private $likes = 0;

  public function like(){
    $this -> likes ++;
  }

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this -> likes);
  }
}

class SponsoredPost extends BasePost
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }

  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

class PremiumPost extends BasePost implements LikeInterface
{
  private $likes = 0;

  public function like(){
    $this -> likes ++;
  }

  private $price;

  public function __construct($text, $price)
  {
    parent::__construct($text);
    $this->price = $price;
  }

  public function show()
  {
    printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this -> likes, $this->price);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');
$posts[3] = new PremiumPost('hello there', 300);

$posts[0] -> like();
$posts[3] -> like();

function processPost(BasePost $post) 
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}