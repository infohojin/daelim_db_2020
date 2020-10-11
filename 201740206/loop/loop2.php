<?php
// 문자열 = > 여러개의 문자 => 배열
$msg = "abcde";
#echo $msg;
for ($i=0;$i<strlen($msg);$i++) {
    // echo $msg[$i];
    $str = $msg[$i];
    echo $str++;
    //echo ++$str;  // b부터 출력
    print "<br>";
}