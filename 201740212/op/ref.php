<?php

$a = "Hi";
echo $a;
echo "<br>";

$b = &$a;
$b = "안녕";
echo $a;