<?php
// 함수
// 사용자 함수
// 내장 함수(언어 자체 지원 함수)

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