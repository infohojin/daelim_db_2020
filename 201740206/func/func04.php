<?php
# 인사말1, 함수 호출
hello("대남이");

# 인사말2,  함수 호출
hello("대숙이");

// 함수를 선언할때, 함수의 목록을 검사해서 중복여부 체크...
// 서버 실행오류를 방지
// 목록, 존재하는 검사
# 목록, 내장함수
$funcs = get_defined_functions();   // 함수의 목록을 배열로 저장
// echo "<pre>";
// print_r($funcs);
// echo "</pre>";

// 검사... -> 조건제어문
if (function_exists("hello")) {
    echo "hello 함수가 존재하네요.";
} else {
    echo "hello 함수가 뭐예요? 처음 들었어요.";
}


function hello($name)
{
    echo "안녕하세요 <br>";
    print "대림대학교의 ";
    print $name . " 입니다.<br>";
    return true;
}