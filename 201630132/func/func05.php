<?php

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