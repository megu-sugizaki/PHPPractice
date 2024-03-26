<?php

//数字が文字列に入っていた場合はintとしてみてほしくない時強い型つけ
declare (strict_types = 1);

function getAward($score): string
{
  return $score >= 100 ? 'Gold Medal' : null;
}