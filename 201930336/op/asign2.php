<?php
$a = 1;
// 웹 html 다음줄 <br> 태그
echo $a;
echo "<br>";

$b = 2;
echo $b;
echo "<br>";

$c = 3;
echo $c;
echo "<br>";

// 실행 전
echo "실행 전 a는 $a, b는 $b <br>";
$t = $a;
$a=$b;
$b = $t;
// 실행 후
echo "실행 전 a는 $a, b는 $b <br>";