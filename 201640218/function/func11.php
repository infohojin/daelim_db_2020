<?php
//매개 변수 배열로 받기
function myname($info) {
    //배열로 연산 수행
    return $info['first']. $info['last']; //문자열

    
}
// 함수 매개변수의 의존성 해결
$my = myname(['first'=>"bae",'last'=>'jongbeom']);
echo "<hr>";
echo $my;