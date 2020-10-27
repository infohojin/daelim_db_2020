<?php

# 함수의 선언은 호출 전/후 모두 위치할수 있다

//함수
//1.사용자 함수(내가 정의한 함수)
//2.내장함수(언어/php자체적으로 지원해주는 함수)


// if 조건 제어문은 검사=>결과를 논리값으로 출력
if(function_exists("hello")){
    //여기에 코드실행
    //echo "hello함수가 존재한다";
}else{
    //없다. 여기에 코드를실행
    //echo "hello 함수가 무엇인가?";
//조건제어문 코드블럭 안에서도 함수선언 가능
function hello($name)
{
    echo "안녕하세요.<br>";
    print "대림대학교의";
    print $name ." 입니다.<br>" ;
    return true;
}
    //함수 목록에 hello 추가
}

# 함수의 선언은 호출 전/후 모두 위치할수 있다

hello("홍길동"); //함수를 호출