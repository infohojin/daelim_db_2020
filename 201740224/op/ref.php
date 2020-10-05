<?

$a = "hi";
echo $a;
echo "<br>"; //브라우저 -> 다음줄

$b = &$a;
$b = "안녕";
echo $a;