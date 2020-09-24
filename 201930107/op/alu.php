<?php
echo "더하기 실습 <hr>";
$sum = 1 + 2 + 3;
echo $sum. "<br>";

$a = 10;
$sum += $a;
echo $sum. "<br>";

$b = 3.14;
$sum += $b;
echo $sum. "<br>";

echo "<br>뺴기 실습 <hr>";
echo 10 - 5, "<br>";

echo "<br>곱하기 실습 <hr>";
echo 2 * 3, "<br>";

echo "<br>나누기 실습 <hr>";
echo 10 / 2, "<br>";

echo "<br>증가연산자 실습 <hr>";
$c = 1;
echo $c;
echo $c + 1;
echo $c;
echo $c + 1;
echo $c. "<br>";

echo "<br>증가연산자 실습 <hr>";
// 후순위 증가
$d = 1;
echo $d++;
echo $d += 2;
echo $d += 3, "<br>";
$e = 1;
echo ++$e;
echo ++$e;
echo ++$e. "<br>";