<?php

$a = 1;
echo $a;

echo"<br>";

$b = 2;
echo $b;

$c = 3;
echo $c;

echo "실행전 a는 $a, b는 $b <br>";
$t = $a;
$a = $b;
$b = $t;
echo "실행후 a는 $a, b는 $b <br>";