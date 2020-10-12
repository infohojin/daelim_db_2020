<?php
$msg = "abcde";
echo $msg."<br>";
// for 초기값, 조건, 증가값
// while 조건......... =>조건만족시까지 무한정 반복가능

$i = 0; //초기값
while ($i < strlen($msg)) {

    echo $msg[$i++]; //$i 변화가 발생
    print "<br>" ; 

    if($i>3){
    break; // loop 강제 종료
    }
}