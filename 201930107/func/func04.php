<?php
// 인사말1, 함수 호출
hello("대남이"); // 호출시 전달값 -> 인자값


// 인사말2, 함수 호출
hello("대숙이");

// 함수 선언시, 함수 목록 검사하여 중복여부 체크 -> 서버 실행오류 방지
#목록
// $funcs = get_defined_functions();
// echo "<pre>";
// print_r($funcs);
// echo "</pre>";
#검사 -> 조건 제어문 if(조건식){}else{}
if (function_exists("hello")) {
    echo "hello함수 존재";
} else {
    echo "hello함수 없음";
}

// 함수 이름 중복 불가
function hello($name) // 함수내에서 받는 변수 -> 매개변수
{
    // 함수 내에 $name 변수 생성
    echo '안녕하세요.<br>';
    print '대림대학교의 ';
    print "$name 입니다.<br>";
    return true;
}