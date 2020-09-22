<?php


$sum = 1 + 2 + 3; // 직접 더하기 가능 (상수)
echo $sum."<br>";

$a = 10;
$sum = $sum + $a; // 변수에 대입 더하기
echo $sum."<br>";  // 문자열 결함

$b = 3.14;
$sum = $sum + $b;
echo $sum."<br>";

echo "빼기 실습: 10 - 5 =";
echo 10 - 5;

echo "<br>곱셈 실습: 2 * 3 =";
echo 2 * 3;

echo "<br>곱셈 실습: 2 * 3 =";
echo 2 * 3;

echo "<br>증가 연산자 실습: ";
$c = 1;
echo $c." | ";
$c = $c + 1;
echo $c." | ";
$d = $c;
echo ++$d;