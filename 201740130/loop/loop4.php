<?php
$msg = "abcde";
echo $msg;
// for 초기값, 조건, 증가
// while 조건.....

$i=0; //초기값
while($i < strlen($msg)) {
    if($i<=1) continue;
    
    echo $msg[$i++];
    print "<br>";

    if($i>3){
        break;
    }

    // while =? 반복횟수 몰라도 동작가능 => 조건 꼭 지정
    // 조건이 참일시 무한으로 동작 => 무한LOOP
    // 무한LOOP 방지 위해 조건 만족 혹은 불만족 을 통해
    // 탈출코드를 작성한다.
}