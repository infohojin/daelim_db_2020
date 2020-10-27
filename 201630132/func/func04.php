<?php
hello("대남이");

hello("대숙이");

/*
$funcs = get_defined_functions();
echo "<pre>";
print_r($funcs);
echo "<pre>";
*/

/*
if(조건-논리값) 성공
if(조건) 성공-조건값 존재 else 실패-조건값이 없다

if(조건) {코드블럭}
if(조건) {코드블럭} else {코드블럭}
*/

if (function_exists("hello")) {
    // 있으면 이곳의 코드를 실행
    echo "hello 함수가 존재";
} else {
    // 없으면 이곳의 코드를 실행
    echo "hello 함수가 없다";
}

function hello($name){
    echo "안녕하세요<br>";
    print "대림대학교의 ";
    print $name . "입니다<br>.";
    return true;
}