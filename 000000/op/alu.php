<?php
echo "더하기 연산을 합니다.<hr>";
echo "<br>"; // 브라우져 다음줄
echo 1+2+3;

$a = 10; // 정수
$b = 3.14; // 실수
echo $a+$b;


echo "<br>";
echo "빼기 연산을 합니다.<hr>";
echo 3 -2;
echo 3 + (-2);

echo "<br>";
echo "wmdrk 연산을 합니다.<hr>";
$c = 1; // 처음 초기화
echo $c; // 1
$c = $c + 1;
echo $c; //2
$c = $c + 1;
echo $c; //4
$c = $c + 1;
echo $c; //4

$c++; // 단축 표현이 가능해요. // 5
echo $c;

echo $c++;
echo $c;

echo --$c; // 5
echo --$c; // 4
echo --$c; // 3