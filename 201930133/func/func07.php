<?php

//  1. 사용자 함수 : 내가 정의한 함수
//  2. 내장 함수 : 언어가 자체적으로 지원해주는 함수.

    #조건문
    if(function_exists("hello")){
        echo "hello 함수가 존재합니다.";
    } else {
        
    function hello($name="대치될 초기값")
        {
            echo "hello 함수가 없습니다."."<br>";
            // 조건 제어문 코드블럭 안에서도 함수를 선언할 수 있다.
            echo "안녕하세요. <br>";
            print "대림대학교의 ";
            print $name . " 입니다~. ^^" . "<br>";
            return true;
        }
    }

    hello("소피소피루비루비");
    hello();
    hello("소피소피루비루비");