<?php
echo "더하기 실습 <hr>";
$sum = 1 + 2 + 3; //직접 더하기 가능 (상수)
echo $sum."<br>";

$a = 10;
$sum = $sum + $a; //변수에 대입 더하기
echo $sum."<br>"; //문자열을 결합할때는 .을 쓴다.

$b = 3.14;
$sum = $sum + $b; //변수에 대입 더하기
echo $sum."<br><br>"; //문자열을 결합할때는 .을 쓴다.

echo "빼기 실습 <hr>";
echo 10 - 5;  //상수만으로 연산하여 출력도 가능
echo "<br><br>";

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
echo ++$e;

