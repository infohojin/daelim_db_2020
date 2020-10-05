<?php

if(function_exists("hello")) {
    echo "hello 함수가 존재하네요.<br>";
} else {
    echo "hello 함수가 뭐에요? 처음 들었어요.<br>";
    //조건 제어문의 코드블럭 안에서도 함수 선언 가능.

    function hello($name="201740130") {
    // 함수내에서 받는 변수, 매개변수
    //$name 변수 함수내에, 생성.
    echo "안녕하세요<br>";
    print "대림대학교 ";
    print  $name."입니다.<br>";
    return true;
    }
    // 함수 목록 hello 추가
}

# 함수의 선언은 호출 전/후 모두 위치 할수 있다
//함수 목록에 있는 hello 호출

hello();
hello("야호");
hello("야호");