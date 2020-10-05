<?php
echo"더하기 실습 <hr>";
$sum = 1+2+3;
echo $sum."<br>"; 


$a = 10;
$sum = $sum + $a;
echo $sum."<br>";//문자열 결합할떄 .을씀

$b= 3.14;
$sum = $sum+$b;
echo $sum."<br><br><br>";

echo"빼기 실습 <hr>";
echo 10-5; // 상수만으로 연산하여 출력O
echo"<br><br><br>";

echo"곱셈 실습 <hr>";
echo 2*3;
echo"<br><br><br>";


echo"증가연산자 실습 <hr>";
$c = 1;
echo $c;
$c = $c + 1;
echo $c;
$c = $c + 1;
echo $c;


echo"<br>";
$d = 1; 
echo $d++;
echo $d+=2; 
echo $d+=3;

echo"<br>";
$e = 1;
echo ++$e;
echo ++$e;
echo ++$e; 