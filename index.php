<?php

// 厳密に型のチェックを行う
declare(strict_type=1);

// 引数と返り値の型チェックを行う書き方、返り値がない場合はvoidと書く
function showInfo(string $name, int $score): void
{
  echo $name . ':' .$score . PHP_EOL;
}