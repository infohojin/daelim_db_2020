<?php
$msg = "abcde";
echo $msg."<br>";
//for(초기값, 조건, 증가)
//while(조건) -> 반복횟수를 몰라도 동작가능 -> 조건 필수
// 조건이 항상 참이면 무한정 동작(무한 루프)
// 조건을 만족하는 탈출 코드 작성

$i=0; //초기값
while($i<strlen($msg)){
    echo $msg[$i++]; //$i값이 변화 발생
    print "<br>";

    if($i>=3){
        break; //loop 강제 종료
    }
}