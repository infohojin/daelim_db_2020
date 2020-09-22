<?php
echo "더하기 연산을 합니다<hr><br>";
echo 1+2+3;

$a = 10; //정수
$b = 3.14;
echo $a+$b;

echo "<br>";
echo "빼기 연산을 합니다. <hr>";
echo 3 -2;
echo 3+(-2);

echo "<br>";
echo "wmdrk 연산을 합니다. <hr>";
$c = 1; //처음초기화
echo $c;
$c = $c+1;
echo $c;
$c = $c+1;
echo $c;
$c = $c+1;
echo $c;

$c++; //단축 표현이 가능
echo $c;

echo $c++;
echo $c;

echo --$c; //5
echo --$c; //4
echo --$c; //3