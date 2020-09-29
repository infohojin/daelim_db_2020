<?php
echo "더하기 실습 <hr>";
$sum = 1 + 2 + 3; //직접 더하기 가능
echo $sum;
echo "<br>";

$a = 10;
$sum = $sum + $a;
echo $sum."<br>";

$b = 3.14;
// $sum 현재 정수
// $b 실수
// 정수 + 실수 => 값
$sum = $sum + $b;
echo $sum."<br>";

echo "빼기 실습 <hr>";
echo 10-5; //상수만으로 연산하여 출력도 가능

echo "곱셈 실습 <hr>";
echo 2*3;

echo "증가연산자 실습 <hr>";

$c =1;
echo $c; //1
$c = $c + 1;
echo $c; //2
$c = $c + 1;
echo $c; //3

echo"<br>";
$d = 1;
echo $d++; // ++ => +1
echo $d+=2; // + 숫자, 그 숫자만큼 증가
echo $d+=3;

echo"<br>";
$e = 1;
echo ++$e;
echo ++$e;
echo ++$e;