<?php

// hello 함수가 있나요?
if (function_exists("hello")){
    echo "hello 함수가 존재하네요.";
} else {
    echo "hello 함수는 처음 들었어요.<br>";

// 조건 제어문의 코드블럭 안에서도 함수를 선언할 수 있습니다.
function hello($name)
// 함수 내에서 받는 변수 = 매개변수
    {
        // $name 변수 함수 내에 생성됩니다.
        echo "안녕하세요.<br>";
        print "대림대학교의 ";
        print $name." 입니다.<br>";
        return true;
    }
    // 함수 목록 hello 추가
}

// 함수 목록에 있는 hello 호출
hello("홍길동"); // 함수를 호출