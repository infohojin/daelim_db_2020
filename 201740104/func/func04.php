<?php

hello("대남이"); 


hello("대숙이");



if (function_exists("hello")) {
    echo "hello 함수가 존재하네요.";

} else {
    echo "hello 함수가 뭐에요? 처음 들었어요.";
}

function hello($name)
// 함수내에서 받는 변수, 매개변수
{
    // $name 변수 함수내에, 생성합니다.
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . " 입니다.<br>";
    return true;
}