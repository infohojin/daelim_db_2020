<?php

//함수
//1.사용자 함수(내가 정의한 함수)
//2.내장함수(언어/php자체적으로 지원해주는 함수)


// if 조건 제어문은 검사=>결과를 논리값으로 출력
if(function_exists("hello")){
    //여기에 코드실행
    echo "hello함수가 존재한다";
}else{
    //없다. 여기에 코드를실행
    echo "hello 함수가 무엇인가?";
}
//함수의 이름은 '중복' 할수 없다.
/*
function hello($name)
{
    // $name 변수 함수내에 생성됨
    echo "안녕하세요.<br>";
    print "대림대학교의";
    print $name ." 입니다.<br>" ;
    return true;
}
*/