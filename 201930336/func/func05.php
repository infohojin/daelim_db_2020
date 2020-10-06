<?php

// 함수는 크게
// 1. 사용자 함수 (내가 정의한 함수)
// 2. 내장함수 (언어/php 자체적으로 지원해주는 함수)

// if 조건 제어문
// 검사 -> 결과를 논리값으로 출력
if (function_exists("hello")){
    echo "hello 함수가 존재하네요.";
} else {
    "hello 함수는 처음 들었어요.";
}

// 함수의 이름은 중복될 수 없다
/*
function hello($name)
// 함수 내에서 받는 변수 = 매개변수
{
    // $name 변수 함수 내에 생성됩니다.
    echo "안녕하세요.<br>"; // br태그로 다음줄 전송
    print "대림대학교의 ";
    print $name." 입니다.<br>";
    return true;
}
*/