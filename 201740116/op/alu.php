<?php
echo "더하기 연산을 합니다.";
echo "<br>";
echo 1+2+3;

$a = 10;
$b = 3.14;
echo $a + $b;

echo "<br>";
echo "빼기 연산을 합니다.<br>";
echo 3-2;
echo 3 + (-2);

echo "<br>";
echo "증가 연산을 합니다.<br>";
$c = 1;
echo $c; //1
$c =  $c + 1;
echo $c; //2 
$c =  $c + 1;
echo $c; //3
$c =  $c + 1;
echo $c;//4

$c++;  // 5
echo $c;

echo $c++;
echo $c;

echo --$c;
echo --$c;
echo --$c;