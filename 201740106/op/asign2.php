<?php

$a=1;
echo $a;
//웹 html 다음줄 <br> 태그
echo "<br>";

$b=2;
echo $b;
echo "<br>";

$c=3;
echo $c;
echo "<br>";

//실행전
echo "실행전 a는 $a, b는 $b <br>";
$t=$a;
$a=$b;
$b=$t;
echo "실행후 a는 $a, b는 $b <br>";


