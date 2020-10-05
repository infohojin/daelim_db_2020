<?php
#인사말1, 함수를 호출
// 함수 호출시 전달되는 값 = 인자값
hello("대남이");

// 함수의 매개변수 $name = "대남이";

#인사말2, 함수를 호출
hello("대숙이");

// 함수를 선언
// 함수 이름 중복 X
// 함수 선언할때, 함수의 목록 검사해 중복여부 체크함
// 서버 실행오류 방지
// 목록, 존재하는지 검사
# 목록, 내장함수
$funcs = get_defined_functions();
echo "<pre>";
print_r($funcs);
echo "</pre>";

# 검사 ... =>조건제어문
// if ( !! ) ~~~ else ~~~
/*
if(조건은 논리값) 성공
if(조건) 성공 조건값 존재한다. else 실패 조건값이 없다.

if(조건) { 코드블럭 } else { 코드블럭 }
*/
if (function_exists("hello")) {
    // 여기의 코드를 실행해주세요.
    echo "hello 함수가 존재하네요";
} else {
    // 없어요 여기의 코드를 실행해주세요.
    echo "hello 함수가 뭐에요? 처음 들었어요.";
}


function hello($name)
// 함수내에서 받는 변수 = 매개변수
{
    // $name 변수 함수내에 생성
    
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name." 입니다.<br>";
    return true;
}




?>