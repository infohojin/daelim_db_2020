<?php
//문자열 =>여러개의 문자=>배열
$msg="abcdefghijk";
#echo $msg;
for($i=0;$i<strlen($msg);$i++){
    $str=$msg[$i];
    echo ++$str;
    print"<br>";
}