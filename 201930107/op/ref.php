<?php
$a = "hi";
echo $a;
echo "\n";

$b = &$a;
$b = "안녕";
echo $a;