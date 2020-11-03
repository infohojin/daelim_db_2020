<?php
//함수 선언
function daelim($num) {
    $name = "대림"; // 지역변수 : 함수 안의 변수 
    echo $name . "대학교" . $num;
    print "<hr>";
}
$name = "daelim"; // 전역 변수 : 함수 밖의 변수 , 함수 안과 밖의 변수명이 중복되어도 상관 없음.
//함수 호출
for ($i=0; $i<5; $i++){
    daelim($i);
}
