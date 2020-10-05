<?php

//  1. 사용자 함수 : 내가 정의한 함수
//  2. 내장 함수 : 언어가 자체적으로 지원해주는 함수.

    #조건문
    if(function_exists("hello")){
        echo "hello 함수가 존재합니다.";
    } else {
        echo "hello 함수가 없습니다.";
    }
    

    // function hello($name)
    // {
    //     // $name 이라는 변수가 함수 내에 생성됨.
    //     echo "안녕하세요. <br>";
    //     print "대림대학교의 ";
    //     print $name . " 입니다~. ^^" . "<br>";
    //     return true;
    // }
    // hello("루비");