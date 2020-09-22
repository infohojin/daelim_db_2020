<?php
echo "더하기 실습 <hr>";

$sum = 1+2+3;
echo $sum;
echo "<br>";

$a = 10;
$sum = $sum + $a;
echo $sum."<br>"; // 문자열 결합

$b = 3.14;

//%sum 현재 정수
//$b 실수
// 정수+실수 => 값

$sum = $sum + $b; // 변수에 대입더하기
echo $sum."<br>"; // 문자열 결합.

echo "빼기 실습 <hr>";
echo 10-5;
echo "곱셈 실습 <hr>";
echo 2*3;
echo "<br><br>";

echo "증가연산자 실습 <hr>";
$c = 1;
echo $c."<br>"; //1
$c = $c + 1;
echo $c."<br>"; //2
$c = $c + 1;
echo $c; //3

echo "<br>";
$d = 1;
echo $d++;
echo $d+=2;
echo $d+=3;

echo "<br>";
$e = 1;
echo ++$e;
echo ++$e;