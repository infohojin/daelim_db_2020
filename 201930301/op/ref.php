<?php
$a = "Hi";
echo $a;
echo "<br>"; //브라우저에서 다음줄에 출력

$b = &$a;
$b = "안녕";
echo $a;