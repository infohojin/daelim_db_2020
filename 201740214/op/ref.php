<?php
// 직접 값을 변경
$a = "Hi";
echo $a;
echo "<br>";
// 간접 값을 변경
$b = &$a;
$b = "안녕";
echo $a;