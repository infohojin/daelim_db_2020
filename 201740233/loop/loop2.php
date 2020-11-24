<?php

// 여러개의 문자 => 배열
$msg = "abcde";
#echo $msg;

for($i = 0; $i < 5; $i++) {
    echo $msg[$i]; // 숫자로 선택하는 배열 => 순차배열
    print "<br>";
}