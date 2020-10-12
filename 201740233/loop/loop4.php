<?php
$msg ="abcde";
echo $msg."<br>";

$i = 0;
while ($i < strlen($msg)) {
    echo $msg[$i++];
    print"<br>";

    if($i > 3) { // 조건값이 참일경우
        break; // 반복문 종료
    }
}