<?php

    // 함수
    // 1. 사용자 함수(내가 정의한 함수)
    // 2. 내장함수 (언어/PHP 자체적으로 지원해 주는 함수)

    // if 조건 제어문
    // 검사 -> 결과를 논리값
    if(function_exists("hello")) {
        // 여기의 코드를 실행해 주세요.
        // echo "hello 함수가 존재하네요.";
    } else {
        // 없어요. 여기의 코드를 실행해 주세요.
        // echo "hello 함수가 존재하지 않네요.";

        // 함수의 이름은 '중복'할 수 없다...
        function hello($name="123456") {

        // $name 변수 함수내에, 생성됩니다.
        echo "안녕하세요.<br>";
        print "대림대학교의";
        print $name . " 입니다.<br>";
        return true;
        }
        // 함수 목록 hello 추가
    }

    # 함수의 선언은 호출 전/후 모두 위치 할 수 있다.

    // 함수 목록에 있는 hello 호출
    hello();
    hello("홍길동");
    hello("홍길동");
    
?>