<?php
//선언
function daelim() {
    print __FUNCTION__ . "호출합니다 . <br>";
    echo "대림대학교";

}
function myname() {
    print __FUNCTION__ . "호출합니다 . <br>";
    echo "배종범 입니다.";

}
//호출
$caller = "daelim";
$caller (); // 변수명 안에 있는 문자열과 동일한
//() -> 함수를 찾아서 실행해주세요.

$func = function(){ // 익명함수
    echo "오늘도 좋은 하루";
};
$func();