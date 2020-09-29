<?php
echo "더하기 연산을 합니다.<hr>"; // 밑줄
echo 1+2+3;
echo "<br>"; //브라우저에서 다음 줄로 넘어감
 
$a = 10; // 정수
$b = 3.14; // 실수
echo $a+$b;

echo "<br>";
echo "빼기 연산을 합니다.<hr>";
echo 3 - 2;
echo 3 + (-2);

echo "<br>";
echo "연산을 합니다.<hr>";
$c = 1;
echo $c;
$c = $c + 1;
echo $c;
$c = $c + 1;
echo $c;
$c = $c + 1;
echo $c;

$c++;
echo $c;
echo $c++;
echo $c;

echo --$c;
echo --$c;
echo --$c;