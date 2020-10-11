<?php
$msg = "abcde";
echo $msg."<br>";
// for 초기값, 조건, 증가
// while 조건값
// while문 반복 횟수 몰라도 동작가능 조건 있어야함
// 조건이 항상 성립되면 무한루프 탈출 할 수 있게 break써야함

$i=0; //초기값
while ($i < strlen($msg)) {

     echo $msg[$i++]; // $i 변화가 발생
     print "<br>";

     if ($i>=4) {
     break; // loop 종료
     }

} 