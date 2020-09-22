<?php
echo "더하기 실습<hr>";
$sum = 1 + 2 + 3;
echo $sum;
echo "<br>";

$a = 10;
$sum = $sum + $a;
echo $sum."<br>";

$b = 3.14;
$sum = $sum + $b;
echo $sum."<br>";

echo "빼기 실습<hr>";
echo 10-5;

echo "곱셈 실습<hr>";
echo 2*3;

echo "증가연산자 실습<hr>";
$c = 1;
echo $c;
$c = $c + 1;
echo $c;
$c = $c + 1;
echo $c;

echo "<br>";
// 후순위 증가
$d = 1;
echo $d++;
echo $d++;
echo $d++;

echo "<br>";
// 선순위 증가
$e = 1;
echo ++$e;
echo ++$e;
echo ++$e;