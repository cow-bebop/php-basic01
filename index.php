<?php

// 厳密に型のチェックを行う
declare(strict_type=1);

// 引数と返り値の型チェックを行う書き方、返り値がない場合はvoidと書く
function showInfo(string $name, int $score): void
{
  echo $name . ':' .$score . PHP_EOL;
}
//////////////////////////
// 型
//////////////////////////

// 型の前に ? マークを付けてあげると、null かその型かという意味になる
// ただし、現時点ではnullかそれ以外かという指定はできるが、整数か文字列かとか、文字列か真偽値かといった指定はできない
function getAward(?int $score): ?string
{
  return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;



//////////////////////////
// 配列
//////////////////////////

$moreScores = [
  55, 72
];

// 配列に配列を追加したい場合は...の後に配列を加える
$scores = [
  90,
  40,
  ...$moreScores,
  100
];

print_r($scores);

//////////////////////////
// 可変長引数
//////////////////////////

// 引数に...をつけると引数がいくつあっても処理できる
function sum(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo sum(2,3,4) . PHP_EOL;
echo sum(2,3,4,5,5) . PHP_EOL;


//////////////////////////
// 返り値で配列を受け取る
//////////////////////////
function getStates(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)];
}

print_r(getStats(2,5,6));

// listは代入した値が引数に入って配列を作る
list($sum, $average) = getStats(1,3,5);
[$sum, $average] = getStats(1,3,5);

echo $sum . PHP_EOL;