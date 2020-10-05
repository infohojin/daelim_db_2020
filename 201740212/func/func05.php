<?php

//함수
//1. 사용자 함수 (내가 정의한 함수)
//2. 내장 함수 (언어/php)

if(function_exists("hello")){
    // 여기의 코드를 실행해 주세요.
    echo "hello 함수가 존재하네요.";
} else{
    // 없어요 . 여기의 코드를 실행해 주세요.
    echo "hello 함수가 뭐에요? 처음 들었어요.";
}



/*
//함수 선언
function hello($name)
{

    //$name 변수 함수내에, 생성
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . " 입니다.<br>";
    return true;
}
*/



