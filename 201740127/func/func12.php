<?php

// 선언
function daelim() {
    print __FUNCTION__ . "호출합니다. <br>";
    echo "대림대학교";
} // 단순 함수 선언은 세미콜론이 필요 없음

function myname() {
    print __FUNCTION__ . "호출합니다. <br>";
    echo "은다인 입니다";
}

// 호출
$caller = "myname";
$caller(); // 변수명 안에 있는 문자열과 동일한 함수를 찾아서 실행

// 변수명 <== 함수명
// 익명함수
$func = function() {
    echo "오늘도 좋은 하루 되세요";
}; // 명령 문장이기 떄문에 세미콜론 필요

$func();
