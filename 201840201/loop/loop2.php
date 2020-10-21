<?php
//문자열 => 여러개의 문자 => 배열
$msg = "abcdefghijk";

#echo $msg;

for($i=0;$i<5;$i++){
    // echo $msg[$i]; # 숫자로 선택하는 배열 => 순차배열
    $str = $msg[$i];
    echo ++$str;
    echo "<br>";
    
}