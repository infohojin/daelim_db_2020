<?php
$msg = "abcde";
echo $msg . "<br>";

// for: 초기값, 조건, 증가값
// while: 조건
$i = 0;
while($i < strlen($msg)) {
    echo $msg[$i++]; // $i 변화 발생
    echo "<br>";

    if ($i >= 3) {
        break; // loop 강제 종료
    }
}