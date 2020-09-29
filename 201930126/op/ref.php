<?php
$a = "hi";
echo $a;
echo "<br>";

$b = &$a;
$b = "안녕";
echo $a;