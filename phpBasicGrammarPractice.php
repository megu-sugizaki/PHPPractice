<?php

abstract class BasePost
{
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  abstract public function show();
}

//PostクラスとPremiumPostクラスのみlikeメソッドを持たせたい
//親クラスは2つ継承できないのでもう1つ用意するのはNG
//抽象メソッドを親クラスに定義するとSponsoredPostまで継承しないといけないのでNG
//→インターフェースを使うと、好きなクラスにメソッド定義を強制させられる
//クラスはいくつでも実装可能で、継承関係にないクラスにも実装可能

class Post extends BasePost
{
  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
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

class PremiumPost extends BasePost
{
  private $price;

  public function __construct($text, $price)
  {
    parent::__construct($text);
    $this->price = $price;
  }

  public function show()
  {
    printf('%s [%d JPY]' . PHP_EOL, $this->text, $this->price);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');
$posts[3] = new PremiumPost('hello there', 300);

function processPost(BasePost $post) 
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}