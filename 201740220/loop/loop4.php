<?php
$msg = "abcde";
echo $msg."<br>";
// for문 초기값, 조건, 증가
// while문 조건...

$i = 0; // 초기값
while($i < strlen($msg)) {
        
    echo $msg[$i++]; // $i 변화가 발생
    print "<br>";

    if ($i>=3) {
    break; // loop를 강제로 종료해 주세요.
    }
}