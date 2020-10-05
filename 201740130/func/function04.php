<?php
// # 인사말1, 함수를 호출
// 함수 호출시 전달되는 값 = 인자값
hello("대남이");

// # 인사말2, 함수를 호출
hello("대숙이");

// 함수를 선언할때, 함수의 목록을 검사해서 중복여부 체크
// 서버 실행오류를 방지
// 목록 존재하는 검사
# 목록, 내장함수
/*
$funcs = get_defined_funtions();
echo "<pre>";
print_r($funcs);
echo "</pre>";
*/

if(function_exists("hello")) {
    echo "hello 함수가 존재하네요.";
} else {
    echo "hello 함수가 뭐에요? 처음 들었어요.";
}




function hello($name) {
    // 함수내에서 받는 변수, 매개변수
    //$name 변수 함수내에, 생성.
    echo "안녕하세요<br>";
    print "대림대학교 ";
    print  $name."입니다.<br>";
    return true;
};

