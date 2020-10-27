<?php
$msg = "abcde";
echo $msg."<br>";

$i = 0;  // 초기값
while ($i < strlen($msg)) {
    // echo $msg[$i];  // 무한루프
    echo $msg[$i++];
    print "<br>";

    if ($i>3) {
        break;  // loop를 강제로 종료
    }
}