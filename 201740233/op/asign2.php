<?php

$a = 1;
echo "$a <br>";

$b = 2;
echo "$b <br>";

$c = 3;
echo "$c <br>";

echo "실행전 a는 $a, b는 $b <br>";
$t = $a;
$a = $b;
$b = $t;
echo "실행후 a는 $a, b는 $b <br>";

