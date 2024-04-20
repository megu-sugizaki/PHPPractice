<?php
//名前空間
namespace Dotinstall\MyPHPApp\Post

class Post
{
  private $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}