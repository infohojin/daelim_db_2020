<?php
$msg = "abcdefghijklmnopqrstuvwxyz";
//echo $msg;
for($i=0; $i<strlen($msg); $i++) {
    $test = $msg[$i];
    echo ++$test; // 숫자로 선택하는 배열 => 순차배열
    print "<br>";
}