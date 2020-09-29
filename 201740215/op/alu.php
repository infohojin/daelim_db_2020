<?php
echo "더하기 실습<br>";
$sum=1+2+3;
echo $sum."<br>";

$a=10;
$sum=$sum+$a;
echo $sum."<br>";


$b=3.14;
$sum=$sum+$b;
echo $sum."<br>";

echo "빼기 실습<br>";
echo 10-5;

echo "곱셉 실습<br>";
echo 2*3;

echo "증가연산자 실습<br>";
$c=1;
echo $c; //1
$c =$c+1;
echo $c; //2
$c=$c+1;
echo $c; //3
//후순위증가
echo "<br>";
$d=1;
echo $d++; //++ => +1
echo $d+=2; // +=숫자 ,그 숫자만큼 증가
echo $d+=3;

echo"<br>";
$e=1;
echo ++$e;
echo ++$e;
echo ++$e;